<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostsController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Post::all();
    return view("pages.postsIndex", compact("posts"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view("pages.postsCreate");
  }

  /**
   * Store a newly created resource in storage.
   */
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

    DB::table("posts")->insert([
      "title" => $posts["title"],
      "content" => $posts["content"],
      "created_at" => now(),
      "updated_at" => now(),
    ]);

    return redirect("/post/index");
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $posts = Post::find($id);
    return view("pages.postsShow", compact("posts"));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $posts = Post::find($id);
    return view("pages.postsEdit", compact("posts"));
  }

  /**
   * Update the specified resource in storage.
   */
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

    return redirect("/post/index");
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $posts = Post::find($id);
    $posts->delete();
    return redirect("/post/index");
  }
}
