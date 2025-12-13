<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
  public function App()
  {
    $posts = Post::all();
    return view("App", compact("posts"));
  }

  public function index()
  {
    $posts = Post::all();
    return view("pages-admin.postsIndex", compact("posts"));
  }

  public function create()
  {
    return view("pages-admin.postsCreate");
  }

  public function store(Request $request)
  {
    $posts = $request->validate(
      [
        "title" => "required|max:255",
        "content" => "required",
      ],
      [
        "title.required" => "Judul harus diisi",
        "title.max" => "Judul tidak boleh lebih 255 huruf",
        "content.required" => "Konten harus diisi",
      ]
    );

    Post::create([
      "title" => $posts["title"],
      "content" => $posts["content"],
      "user_id" => null, // ADMIN
    ]);

    return redirect("/admin/post/index");
  }

  public function show(string $id)
  {
    $posts = Post::find($id);
    return view("pages-admin.postsShow", compact("posts"));
  }

  public function komentar(string $id)
  {
    $posts = Post::find($id);
    return view("pages-admin.comment", compact("posts"));
  }

  public function edit(string $id)
  {
    $posts = Post::find($id);
    return view("pages-admin.postsEdit", compact("posts"));
  }

  public function update(Request $request, string $id)
  {
    $posts = $request->validate(
      [
        "title" => "required|max:255",
        "content" => "required",
      ],
      [
        "title.required" => "Judul harus diisi",
        "title.max" => "Judul tidak boleh lebih 255 huruf",
        "content.required" => "Konten harus diisi",
      ]
    );

    Post::where("id", $id)->update([
      "title" => $posts["title"],
      "content" => $posts["content"],
      "updated_at" => now(),
    ]);

    return redirect("/admin/post/index");
  }

  public function destroy(string $id)
  {
    $posts = Post::find($id);
    $posts->delete();
    return back();
  }
}
