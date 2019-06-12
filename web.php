<?php

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

// šis atver pirmo lapu (sākumu) un savieno ar bloga ierakstiem;
Route::get('/', function () {
    // $allPosts = App\BlogPost::all();
    $singlePost = App\BlogPost::find(1);
    return view('pages.sakums', [
        'posts'=> $singlePost,
    ]);
});

Route::get('/', function () {
    $allPosts = App\BlogPost::all();
    // $singlePost = App\BlogPost::find(1);
    return view('pages.sakums', [
        'posts'=> $allPosts,
    ]);
});

// šis atver bloga lapu un un savieno ar bloga ierakstu;
Route::get('/blog', function () {
    $postItem = App\BlogPost::find(1);
    return view('pages.blogs', [
        'posts'=> $singlePost,
    ]);
});

// šis bloga lapā, galvenajam ierakstam iedod datus no datubāzes par vienu atsevišķu ierakstu;
Route::get('/blog/', function () {
    $allPosts = App\BlogPost::all();

    return view('pages.blogs', [
        'posts'=> $allPosts,
        'firstPost'=> $allPosts->first(),
    ]);
});


// šis atver ierakstu lapu;
Route::get('/ieraksti', function () {
    return view('pages.ieraksti');
});


// šis atver kontaktu lapu;
Route::get('/contacts', function () {
    return view('pages.kontakti');
});

Route::get('/ieraksti/{id}', function ($id) {

    // $allPosts = App\BlogPost::all();
    $singlePost = App\BlogPost::find($id);

    return view('pages.ieraksti', [
        'firstPost'=> $singlePost,
    ]);
});


// Route::get('/news', function () {
//     return view('pages.news');
// });
