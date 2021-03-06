<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Symfony\Component\String\s;

class UserController extends Controller
{

    public function main() {
        return view('main');
    }

    public function register() {
        return view('user.register');
    }

    public function registerPost(RegisterRequest $request) {
        $request->merge(['password' => Hash::make($request->password)]);
        User::create($request->all());

        return back()->with('success', true);
    }

    public function login() {
        return view('user.login');
    }

    public function loginPost(LoginRequest $request) {
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect()->route('adminAccount');
            }
            return redirect()->route('account');
        }
        return back()->withErrors('field', 'Неверный логин или пароль');
    }

    public function account() {
        return view('user.account');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function adminAccount() {
        $products = Product::all();
        return view('admin.adminAccount', compact('products'));
    }
}
