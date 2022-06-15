<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\NewController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin', function () {
    return view('auth.login');
}); 
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/post-details/{slug}', [HomeController::class, 'show'])->name('post-details');
Route::get('/category-news/{category}', [HomeController::class, 'categoryindex'])->name('category-news');
Route::get('/breaking-details/{slug}', [HomeController::class, 'showBreaking'])->name('breaking-details');   
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('/Admin/dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
 
Route::resources([
	'post-details' => 'HomeController',	
]);

Route::group(
[
'namespace'=>'Admin',
'prefix' => 'admin'], 
function(){
 Route::resources([
 'categories'=>'CategoryController',
  'blogs'=>'BlogPostController',
  'news'=>'NewController',
 ]);
});
