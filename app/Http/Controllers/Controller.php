<?php

namespace App\Http\Controllers;

use App\Models\Post;

class Controller extends \Illuminate\Routing\Controller
{
  public function App()
  {
    $posts = Post::all();
    return view("App", compact("posts"));
  }

  public function komentar(string $id)
  {
    $posts = Post::find($id);
    return view("pages-admin.comment", compact("posts"));
  }
}
