<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ArtikelController;

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

Auth::routes();

Route::get('/', 'LandingpageController@index');
// Route::get('/blog', 'BlogController@index');
Route::get('/artikel', 'ArtikelController@index');
// Route::get('/artikel-details', 'ArtikelController@detail');
Route::get('/artikel-detail/{slug}', [ArtikelController::class, 'detail'])->name('artikel.detail');

Route::get('/layanan', 'LayananController@index');
// Route::get('/layanan-detail', 'LayananController@detail');
Route::get('/layanan-detail/{slug}', [LayananController::class, 'detail'])->name('layanan.detail');

Route::get('/portfolio', 'PortfolioController@index');
/*Route::get('/isi_post', function(){
	return view('blog.isi_post');
});*/
Route::get('/isi-post/{slug}', 'BlogController@isi_blog')->name('blog.isi');
Route::get('/list-post','BlogController@list_blog')->name('blog.list');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/cari','BlogController@cari')->name('blog.cari');




Route::group(['middleware' => 'auth'], function(){
	Route::get('/dasboard', 'HomeController@index')->name('dasboard');
	Route::resource('/category', 'CategoryController');
	Route::resource('/tag', 'TagController');

	Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
	Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
	Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
	Route::resource('/post', 'PostController');
	Route::resource('/user', 'UserController');
});









