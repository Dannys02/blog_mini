<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
  /**
   * Tampilkan SEMUA post milik user yang login
   */
  public function index()
  {
    $posts = Post::where("user_id", auth()->id())
      ->latest()
      ->get();

    return view("pages-user.postsIndex", compact("posts"));
  }

  /**
   * Form tambah post
   */
  public function create()
  {
    return view("pages-user.postsCreate");
  }

  /**
   * Simpan post baru milik user
   */
  public function store(Request $request)
  {
    $validated = $request->validate(
      [
        "title" => "required|max:255",
        "content" => "required",
      ],
      [
        "title.required" => "Judul harus diisi",
        "title.max" => "Judul maksimal 255 karakter",
        "content.required" => "Konten harus diisi",
      ]
    );

    Post::create([
      "title" => $validated["title"],
      "content" => $validated["content"],
      "user_id" => auth()->id(), // 🔑 KUNCI KEAMANAN
    ]);

    return redirect("/user/post/index");
  }

  /**
   * Form edit post (HANYA milik sendiri)
   */
  public function edit($id)
  {
    $posts = Post::where("id", $id)
      ->where("user_id", auth()->id())
      ->firstOrFail();

    return view("pages-user.postsEdit", compact("posts"));
  }

  /**
   * Update post (HANYA milik sendiri)
   */
  public function update(Request $request, $id)
  {
    $posts = Post::where("id", $id)
      ->where("user_id", auth()->id())
      ->firstOrFail();

    $validated = $request->validate(
      [
        "title" => "required|max:255",
        "content" => "required",
      ],
      [
        "title.required" => "Judul harus diisi",
        "title.max" => "Judul maksimal 255 karakter",
        "content.required" => "Konten harus diisi",
      ]
    );

    $posts->update($validated);

    return redirect("/user/post/index");
  }

  /**
   * Hapus post (HANYA milik sendiri)
   */
  public function destroy($id)
  {
    $posts = Post::where("id", $id)
      ->where("user_id", auth()->id())
      ->firstOrFail();

    $posts->delete();

    return back();
  }
}
