<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Show the login form
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            
            // Check if user has 2FA enabled
            if ($user->two_factor_enabled) {
                // Store user ID and remember status in session
                Session::put('2fa_user_id', $user->id);
                Session::put('2fa_remember', $remember);
                
                // Logout the user temporarily
                Auth::logout();
                
                // Generate and send 2FA code
                $code = $user->generateTwoFactorCode();
                $this->sendTwoFactorCode($user, $code);
                
                return redirect()->route('2fa.show');
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * Handle logout request
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    /**
     * Send 2FA code via email
     */
    private function sendTwoFactorCode(User $user, string $code)
    {
        try {
            \Mail::send('emails.two-factor', [
                'user' => $user,
                'code' => $code,
            ], function ($message) use ($user) {
                $message->to($user->email)
                        ->subject('Two-Factor Authentication Code');
            });
        } catch (\Exception $e) {
            // Log the error but don't expose it to the user
            \Log::error('Failed to send 2FA email: ' . $e->getMessage());
        }
    }
}