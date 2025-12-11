<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
  public function showLogin()
  {
    return view("auth.login");
  }

  public function login(Request $req)
  {
    $cred = $req->validate(
      [
        "email" => "required|email",
        "password" => "required|min:5",
      ],
      [
        "email.required" => "Email harus diisi",
        "email.email" => "Format email tidak valid",
        "password.required" => "Password harus diisi",
        "password.min" => "Password minimal 5 huruf",
      ]
    );

    //if (Auth::attempt($cred)) {
      //$req->session()->regenerate();
      //return redirect("/dashboard");
    //}
    
    if (Auth::guard("user")->attempt($cred)) {
      $req->session()->regenerate();
      return redirect("/dashboard");
    }

    return back()->withErrors(["email" => "Email atau password salah"]);
  }

  public function showRegister()
  {
    return view("auth.register");
  }

  public function register(Request $req)
  {
    $req->validate(
      [
        "name" => "required",
        "email" => "required|email|unique:users,email",
        "password" => "required|min:5",
      ],
      [
        "name.required" => "Nama harus diisi",
        "email.required" => "Email harus diisi",
        "email.unique" => "Email yang digunakan telah terdaftar",
        "password.required" => "Password harus diisi",
        "password.min" => "Password minimal 5 huruf",
      ]
    );

    User::create([
      "name" => $req->name,
      "email" => $req->email,
      "password" => Hash::make($req->password),
    ]);

    return redirect("/login");
  }

  public function showForgetPassword()
  {
    return view("auth.forgetPassword");
  }

  public function sendResetToken()
  {
    return back()->with("msg", "Dummy reset password — nanti bisa dipoles");
  }

  public function logout(Request $req)
  {
    Auth::logout();
    $req->session()->invalidate();
    $req->session()->regenerateToken();
    return redirect("/login");
  }
}
