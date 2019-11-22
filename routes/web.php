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

Route::get('/', function () {

    // < 練習2-2>使用 create 方法
    // \App\Post::create([
    // 'title' => 'test title',
    // 'content' => 'test content',
    // ]);

    //< 練習2-5> 改用 new 的方式新增資料
    // $post = new \App\Post();
    // $post->title = 'test title';
    // $post->content = 'test content';
    // $post->save();

    //< 練習3-2> 使用 all 方法
    // $posts = \App\Post::all();
    // dd($posts);

    //< 練習3-3> 使用 find 方法
    // $post = \App\Post::find(1);
    // dd($post);

    //< 練習3-4> 練習條件式
    // $posts = \App\Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    // dd($posts);

    //< 練習4-1> 使用 update 方法
    /*
    $post = \App\Post::find(1);
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);
    */

    //< 練習4-3> 換用 save 方法
    /*
    $post = \App\Post::find(1);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();
    */

    //< 練習5-1>  使用 delete 方法
    // $post = \App\Post::find(1);
    // $post->delete();

    //< 練習5-3>   使用 destroy 方法
    // \App\Post::destroy(2);

    //< 練習5-5>  刪除多筆資料
    // \App\Post::destroy(3, 5, 7);

    // return view('welcome');
    //< 練習6-1>  取得 Collection
    $allPosts = \App\Post::all();
    dd($allPosts);
    $featuredPosts = \App\Post::where('is_feature', 1)->get();
    dd($featuredPosts);

});

Route::get('posts', ['as' => 'posts.index', 'uses' =>
    'PostsController@index']);

Route::get('post', ['as' => 'posts.show', 'uses' => 'PostsController@show']);

Route::get('about', ['as' => 'posts.about', 'uses' =>
    'PostsController@about']);

Route::get('contact', ['as' => 'posts.contact', 'uses' =>
    'PostsController@contact']);
