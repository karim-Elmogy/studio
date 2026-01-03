<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class TwoFactorController extends Controller
{
    /**
     * Show the 2FA verification form
     */
    public function show()
    {
        if (!Session::has('2fa_user_id')) {
            return redirect()->route('login');
        }

        return view('admin.auth.two-factor');
    }

    /**
     * Verify the 2FA code
     */
    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|string|size:6',
        ]);

        $userId = Session::get('2fa_user_id');
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('login')->withErrors(['email' => 'Session expired. Please login again.']);
        }

        if (!$user->isValidTwoFactorCode($request->code)) {
            return back()->withErrors(['code' => 'Invalid or expired verification code.']);
        }

        // Clear the 2FA session data
        Session::forget('2fa_user_id');
        Session::forget('2fa_remember');

        // Login the user
        Auth::login($user, Session::get('2fa_remember', false));

        // Clear the 2FA code
        $user->clearTwoFactorCode();

        flash()->success('Welcome back!');
        return redirect()->intended('/dashboard');
    }

    /**
     * Resend the 2FA code
     */
    public function resend()
    {
        if (!Session::has('2fa_user_id')) {
            return redirect()->route('login');
        }

        $userId = Session::get('2fa_user_id');
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('login')->withErrors(['email' => 'Session expired. Please login again.']);
        }

        // Generate new code and send email
        $code = $user->generateTwoFactorCode();
        $this->sendTwoFactorCode($user, $code);

        // Display a success toast with no title
        flash()->success('A new verification code has been sent to your email.');
        return redirect()->back();
    }

    /**
     * Send 2FA code via email
     */
    private function sendTwoFactorCode(User $user, string $code)
    {
        try {
            Mail::send('emails.two-factor', [
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
