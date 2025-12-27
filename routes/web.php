<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Http\Controllers\Admin\PostsController as AdminPostsController;
use App\Http\Controllers\User\PostsController as UserPostsController;

use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\UserController;

Route::get("/", [Controller::class, "App"]);

// USER AUTH
Route::middleware("guest.user")->group(function () {
  Route::get("/login", [UserAuthController::class, "showLogin"]);
  Route::post("/login", [UserAuthController::class, "login"]);
  Route::get("/register", [UserAuthController::class, "showRegister"]);
  Route::post("/register", [UserAuthController::class, "register"]);
  Route::get("/forget-password", [
    UserAuthController::class,
    "showForgetPassword",
  ]);
  Route::post("/forget-password", [
    UserAuthController::class,
    "sendResetToken",
  ]);
});

// USER DASHBOARD (LOGIN WAJIB)
Route::middleware("auth.user")->group(function () {
  Route::get("/dashboard", [UserController::class, "index"]);
  Route::get("/post/komentar/{id}", [Controller::class, "komentar"]);

  // USER POSTS CRUD
  Route::get("/user/post/index", [UserPostsController::class, "index"]);
  Route::get("/user/post/create", [UserPostsController::class, "create"]);
  Route::post("/user/post/store", [UserPostsController::class, "store"]);
  Route::get("/user/post/show/{id}", [UserPostsController::class, "show"]);
  Route::get("/user/post/edit/{id}", [UserPostsController::class, "edit"]);
  Route::put("/user/post/update/{id}", [UserPostsController::class, "update"]);
  Route::delete("/user/post/delete/{id}", [UserPostsController::class, "destroy",]);

  Route::post("/logout", [UserAuthController::class, "logout"]);
});

// ADMIN AUTH
Route::prefix("admin")->group(function () {
  Route::middleware("guest.admin")->group(function () {
    Route::get("/login", [AdminAuthController::class, "showLogin"]);
    Route::post("/login", [AdminAuthController::class, "login"]);
  });

  // ADMIN DASHBOARD (WAJIB ADMIN)
  Route::middleware("auth.admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"]);
    Route::get("/comment-user", [DashboardController::class, "commentUser"]);
    Route::get("/list-user", [DashboardController::class, "showUser"]);

    // POSTS ADMIN CRUD
    Route::get("/post/create", [AdminPostsController::class, "create"]);
    Route::post("/create/post", [AdminPostsController::class, "store"]);
    Route::get("/post/index", [AdminPostsController::class, "index"]);
    Route::get("/post/show/{id}", [AdminPostsController::class, "show"]);
    Route::get("/post/edit/{id}", [AdminPostsController::class, "edit"]);
    Route::put("/post/update/{id}", [AdminPostsController::class, "update"]);
    Route::delete("/post/delete/{id}", [
      AdminPostsController::class,
      "destroy",
    ]);

    // LOGOUT ADMIN
    Route::post("/logout", [AdminAuthController::class, "logout"]);
  });
});
?>
