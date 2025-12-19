<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function index()
  {
    $posts = Post::where("user_id", Auth::guard("user")->id())
      ->latest()
      ->get();
      
    return view("dashboardUser", compact("posts"));
  }
}
