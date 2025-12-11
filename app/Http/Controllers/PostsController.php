<?php

namespace App\Http\Controllers;

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
  
  //Admin POSTS
  public function index()
  {
    $posts = Post::all();
    return view("pages.postsIndex", compact("posts"));
  }

  public function create()
  {
    return view("pages.postsCreate");
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

    DB::table("posts")->insert([
      "title" => $posts["title"],
      "content" => $posts["content"],
      "created_at" => now(),
      "updated_at" => now(),
    ]);

    return redirect("/admin/post/index");
  }

  public function show(string $id)
  {
    $posts = Post::find($id);
    return view("pages.postsShow", compact("posts"));
  }

  public function komentar(string $id)
  {
    $posts = Post::find($id);
    return view("pages.comment", compact("posts"));
  }

  public function edit(string $id)
  {
    $posts = Post::find($id);
    return view("pages.postsEdit", compact("posts"));
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

    return back();
  }

  public function destroy(string $id)
  {
    $posts = Post::find($id);
    $posts->delete();
    return back();
  }
  
  
  //USER POSTS
  public function indexUser()
  {
    $posts = Post::all();
    return view("pages.postsIndex", compact("posts"));
  }

  public function createUser()
  {
    return view("pages.postsCreate");
  }

  public function storeUser(Request $request)
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

    return redirect("/admin/post/index");
  }

  public function showUser(string $id)
  {
    $posts = Post::find($id);
    return view("pages.postsShow", compact("posts"));
  }

  public function komentarUser(string $id)
  {
    $posts = Post::find($id);
    return view("pages.comment", compact("posts"));
  }

  public function editUser(string $id)
  {
    $posts = Post::find($id);
    return view("pages.postsEdit", compact("posts"));
  }

  public function updateUser(Request $request, string $id)
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

    return back();
  }

  public function destroyUser(string $id)
  {
    $posts = Post::find($id);
    $posts->delete();
    return back();
  }
}
