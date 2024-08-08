<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog' , 'posts' =>[
       [

        'id' => '1',
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Mirza',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nam illo, placeat non, atque pariatur consequuntur labore quam cum iusto, 
        molestiae commodi impedit voluptate omnis possimus eligendi dolor recusandae perferendis. Quibusdam.'

       ],
       [

        'id' => '2',
        'slug' => 'judul-artikel-2',
        'title' => 'Judul Artikel 2',
        'author' => 'Jonathan',
        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Nihil, nisi temporibus? Inventore, neque. Sunt, quia nostrum! 
        Quibusdam sit repellat possimus vel quas eius voluptate earum consectetur ratione! Dolores, deserunt excepturi'

       ] 
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
 
         'id' => '1',
         'slug' => 'judul-artikel-1',
         'title' => 'Judul Artikel 1',
         'author' => 'Mirza',
         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
         Nam illo, placeat non, atque pariatur consequuntur labore quam cum iusto, 
         molestiae commodi impedit voluptate omnis possimus eligendi dolor recusandae perferendis. Quibusdam.'
 
        ],
        [
 
         'id' => '2',
         'slug' => 'judul-artikel-2',
         'title' => 'Judul Artikel 2',
         'author' => 'Jonathan',
         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
         Nihil, nisi temporibus? Inventore, neque. Sunt, quia nostrum! 
         Quibusdam sit repellat possimus vel quas eius voluptate earum consectetur ratione! Dolores, deserunt excepturi'
 
        ] 
    
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});