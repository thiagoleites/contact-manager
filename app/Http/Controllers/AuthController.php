<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function attempt(AuthRequest $request): RedirectResponse
    {

        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (Auth::attempt($credentials)) {
            Session::regenerateToken();
            return redirect()->route('contact.index');
        }

        return back()
            ->withErrors([
                'message' => 'Os dados informados não conferem.',
            ])->withInput($request->only(['email']));
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        Session::regenerateToken();

        return redirect()->route('contact.index');
    }

}
