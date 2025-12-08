<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

use App\Http\Controllers\AuthController as UserAuthController;

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

// USER AUTH
Route::get("/login", [UserAuthController::class, "showLogin"]);
Route::post("/login", [UserAuthController::class, "login"]);

Route::get("/register", [UserAuthController::class, "showRegister"]);
Route::post("/register", [UserAuthController::class, "register"]);

Route::get("/forget-password", [
  UserAuthController::class,
  "showForgetPassword",
]);
Route::post("/forget-password", [UserAuthController::class, "sendResetToken"]);

Route::post("/logout", [UserAuthController::class, "logout"]);

// USER DASHBOARD (LOGIN WAJIB)
Route::middleware("auth.user")->group(function () {
  Route::get("/dashboard", function () {
    return view("dashboardUser");
  });
});

// ADMIN AUTH
Route::prefix("admin")->group(function () {
  // LOGIN ADMIN
  Route::get("/login", [AdminAuthController::class, "showLogin"]);
  Route::post("/login", [AdminAuthController::class, "login"]);

  // ADMIN DASHBOARD (WAJIB ADMIN)
  Route::middleware("auth.admin")->group(function () {
    Route::get("/dashboard", [DashboardController::class, "index"]);
  });

  // LOGOUT ADMIN
  Route::post("/logout", [AdminAuthController::class, "logout"]);
});

// POSTS CRUD
Route::get("/create", [PostsController::class, "create"]);
Route::post("/create/post", [PostsController::class, "store"]);
Route::get("/post/index", [PostsController::class, "index"]);
Route::get("/post/show/{id}", [PostsController::class, "show"]);
Route::get("/post/edit/{id}", [PostsController::class, "edit"]);
Route::put("/post/update/{id}", [PostsController::class, "update"]);
Route::delete("/post/delete/{id}", [PostsController::class, "destroy"]);
?>
