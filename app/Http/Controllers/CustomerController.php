<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function showRegisterForm()
{
    return view('register');
}

public function register(Request $request)
{
    $request->validate([
        'username' => 'required|unique:customers',
        'password' => 'required|min:3',
    ]);

    Customer::create([
        'username' => $request->username,
        'password' => $request->password,
    ]);

    return redirect()->route('register.form')->with('success', 'Customer registered successfully!');
}
}
