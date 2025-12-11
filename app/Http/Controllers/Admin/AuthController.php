<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function showLogin()
  {
    return view("auth.loginAdmin");
  }

  public function login(Request $req)
  {
    $cred = $req->validate([
      "email" => "required|email",
      "password" => "required",
    ]);

    if (Auth::guard("admin")->attempt($cred)) {
      $req->session()->regenerate();
      return redirect("/admin/dashboard");
    }

    return back()->withErrors(["email" => "Email atau password salah"]);
  }

  public function logout(Request $req)
{
    Auth::guard('admin')->logout();

    $req->session()->invalidate();
    $req->session()->regenerateToken();

    // Hapus cookie guard admin
    cookie()->queue(cookie()->forget('laravel_session'));

    return redirect('/admin/login');
}

}
