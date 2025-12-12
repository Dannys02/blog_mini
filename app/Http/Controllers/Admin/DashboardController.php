<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DashboardController extends Controller
{
  public function index()
  {
    // Data Post hanya bakal tertampil satu hari penuh, setelah itu tidak tampil
    $posts = Post::whereDate("created_at", today())
      ->latest()
      ->get();

    return view("dashboardAdmin", compact("posts"));
  }
}
