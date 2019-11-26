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
    //return view('index');
    //return view('post');
    //return view('welcome');

    //\App\Post::create([
    //    'title'=>'testtitle',
    //    'content'=>'testcontent',]);

    //$post = new \App\Post();
    //$post->title = 'test title2';
    //$post->content = 'test content2';
    //$post->save();

    //$posts = \App\Post::all();
    //dd($posts);

    //$post = \App\Post::find(1);
    //dd($posts);

    //$post=\App\Post::where('id', '<', 10)->orderBy('id','DESC')->get();
    //dd($post);

    //$post = \App\Post::find(1);
    //$post->update([
        //'title' => 'updated title',
        //'content' => 'updated content',
    //]);

    //$post=\App\Post::find(1);
    //$post->title='savedtitle';
    //$post->content='savedcontent';
    //$post->save();

    //$post = \App\Post::find(1);
    //$post->delete();
    //\App\Post::destroy(2);

    //\App\Post::destroy(3,5,7);

    //    $allPosts = \App\Post::all();
    //    dd($allPosts);

    $featuredPosts = \App\Post::where('is_feature', 1)->get();
    dd($featuredPosts);


});
//Route::get('posts', ['as' => 'posts.index',   'uses' => 'PostsController@index']);
//Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@show']);
//Route::get('about',    ['as' => 'posts.about',   'uses' => 'PostsController@about']);
//Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);
