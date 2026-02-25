<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function showVendorLogin()
    {
        return view('agent.login');
    }
    public function showVendorRegister()
    {
        return view('agent.register');
    }

    public function loginVendor(LoginRequest $request)
    {
        return $this->handleLogin($request, 'vendor');
    }

    public function showInvestorLogin()
    {
        return view('investor.login');
    }
    public function showInvestorRegister()
    {
        return view('investor.register');
    }

    public function loginInvestor(LoginRequest $request)
    {
        return $this->handleLogin($request, 'investor'); 
    }

    public function showAdminLogin()
    {
        return view('admin.login');
    }

    public function loginAdmin(LoginRequest $request)
    {
        // $expectedCategory = Auth::user()->category;
        return $this->handleLogin($request, 'admin');
    }
    public function showAdminRegister()
    {
        return view('admin.register');
    }

    public function showClientLogin()
    {
        return view('auth.client-login');
    }

    public function loginClient(LoginRequest $request)
    {
        return $this->handleLogin($request, 'client');
    }

    private function handleLogin(LoginRequest $request, $expectedCategory)
    {
        $request->authenticate();

        $user = Auth::user();
        // dd($user);

        if ($user->category !== $expectedCategory) {
            Auth::logout();
            return redirect()->back()->withErrors([
                'email' => 'You are not authorized to access this dashboard.'
            ]);
        }

        $request->session()->regenerate();

        return redirect()->route($expectedCategory . '.dashboard');
    }
}
