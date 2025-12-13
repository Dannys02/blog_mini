<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

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

  public function commentUser()
  {
    $comment = Comment::all();
    return view("pages.comment", compact("comment"));
  }

  public function showUser()
  {
    $user = User::all();
    return view("pages.listUser", compact("user"));
  }
}
