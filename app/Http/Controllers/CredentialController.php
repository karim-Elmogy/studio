<?php

namespace App\Http\Controllers;

use App\Models\Credential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $credentialsQuery = Credential::query();

        $q = trim((string) $request->get('q', ''));
        $url = trim((string) $request->get('url', ''));
        $username = trim((string) $request->get('username', ''));
        $server = trim((string) $request->get('server_name', ''));

        if ($q !== '') {
            $credentialsQuery->where(function ($builder) use ($q) {
                $builder->where('url', 'like', "%{$q}%")
                    ->orWhere('username', 'like', "%{$q}%")
                    ->orWhere('server_name', 'like', "%{$q}%");
            });
        }

        if ($url !== '') {
            $credentialsQuery->where('url', 'like', "%{$url}%");
        }

        if ($username !== '') {
            $credentialsQuery->where('username', 'like', "%{$username}%");
        }

        if ($server !== '') {
            $credentialsQuery->where('server_name', 'like', "%{$server}%");
        }

        $credentials = $credentialsQuery->latest()->paginate(12)->appends($request->query());

        return view('admin.credentials.index', compact('credentials', 'q', 'url', 'username', 'server'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.credentials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'url' => ['required','string','max:255'],
            'username' => ['required','string','max:255'],
            'password' => ['required','string','max:1000'],
            'server_name' => ['nullable','string','max:255'],
        ]);

        $credential = new Credential();
        $credential->url = $data['url'];
        $credential->username = $data['username'];
        $credential->password = $data['password']; // encrypted via mutator
        $credential->server_name = $data['server_name'] ?? null;
        $credential->save();

        return Redirect::route('credentials.index')->with('success', __('Credential created.'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Credential $credential)
    {
        return view('admin.credentials.show', compact('credential'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Credential $credential)
    {
        return view('admin.credentials.edit', compact('credential'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Credential $credential)
    {
        $data = $request->validate([
            'url' => ['required','string','max:255'],
            'username' => ['required','string','max:255'],
            'password' => ['nullable','string','max:1000'],
            'server_name' => ['nullable','string','max:255'],
        ]);

        $credential->url = $data['url'];
        $credential->username = $data['username'];
        if (!empty($data['password'])) {
            $credential->password = $data['password'];
        }
        $credential->server_name = $data['server_name'] ?? null;
        $credential->save();

        return Redirect::route('credentials.index')->with('success', __('Credential updated.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Credential $credential)
    {
        $credential->delete();

        if (request()->wantsJson()) {
            return response()->json(['ok' => true]);
        }

        return Redirect::route('credentials.index')->with('success', __('Credential deleted.'));
    }
}
