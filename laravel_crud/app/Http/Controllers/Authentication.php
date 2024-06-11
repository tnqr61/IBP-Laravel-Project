<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Admin;

class Authentication extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('name', 'password');

        // doctor mu check et

        $doctor = Doctor::where('name', $credentials['name'])->first();
        if ($doctor && \Hash::check($credentials['password'], $doctor->password))
         {
            return redirect()->route('doctorpage')->with('doctor',$doctor);
        }

        //admin mi chechk et
        $admin = Admin::where('email', $credentials['name'])->first();
        if ($admin && ($credentials['password']== $admin->password)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors('Login details are not valid');
    }
}
