<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get("/Vasia", function(){
return "petya";
});

Royte::get('/post/page/{page?}', function ($page=1){
return 'страница номер'.$page;
});

Royte::get('/posts/page/{page?}', function ($page){
return 'страница номер'.$page;
});

Royte::get('/post/{slug}/{id}', function ($slug,$id){
    return 'пост'.$slug.''.$id;
});
Royte::get('/post/{slug}/{id}', function ($slug, $id){
    return 'пост'.$slug.''.$id;
})->where('slug', '[a-z0-9_-]+')->where('id', '[0-9]+');

Royte::get('/post/{id}', function ($id){
    return 'id';
});
Royte::get('/post/all', function(){
    return 'all';
});
Royte::get('/post/{id}', function ($id){
    return 'id';
})->where('id', '[0-9]+');
Royte::get('/post/all', function(){
    return 'all';
});*/
?>
<?php
Route::get('/post',['App\\Http\\Controller', 'show']);
?>
<?php
use App\Http\Controllers\PostController;
Route:: get('/post', [PostController::class, 'show']);
?>
<?php 
Route::get('/post/{id}', [PostController::class, 'show']);
?>