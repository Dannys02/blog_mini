<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AuthController as UserAuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;

Route::get("/", [PostsController::class, "App"]);

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
  Route::get("/post/komentar/{id}", [PostsController::class, "komentar"]);
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

    // POSTS CRUD
    Route::get("/post/create", [PostsController::class, "create"]);
    Route::post("/create/post", [PostsController::class, "store"]);
    Route::get("/post/index", [PostsController::class, "index"]);
    Route::get("/post/show/{id}", [PostsController::class, "show"]);
    Route::get("/post/edit/{id}", [PostsController::class, "edit"]);
    Route::put("/post/update/{id}", [PostsController::class, "update"]);
    Route::delete("/post/delete/{id}", [PostsController::class, "destroy"]);

    // LOGOUT ADMIN
    Route::post("/logout", [AdminAuthController::class, "logout"]);
  });
});
?>
