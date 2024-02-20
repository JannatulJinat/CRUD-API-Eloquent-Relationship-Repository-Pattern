<?php

use App\Models\Affiliation;
use App\Models\Collection;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Series;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    //one to one [User - Profile]
    // $user = User::with('profile')->get();
    // return $user; //ok
    // $profile = Profile::with('user')->get();
    // return $profile; //ok

    //one to many [User - Post]
    // $user = User::with('posts')->get();
    // return $user; //ok
    // $post = Post::with('user')->get();
    // return $post; //OK

    //many to many [Post - Tag]
    // $post = Post::with('tags')->get();
    // return $post;
    // $tag = Tag::with('posts')->get();
    // return $tag;

    //has many through [Affiliation - Post - User]
    // $affiliation = Affiliation::with('posts')->get();
    // return $affiliation;

    //polymorphic relationship -> (one to many)
    // $series = Series::with('videos')->get();
    // return $series;
    // $collection = Collection::with('videos')->get();
    // return $collection;
    // $videos = Video::with('watchable')->get();
    // return $videos;

    //polymorphic relationship -> (many to many)
    // $vdo = Video::with('likes')->get();
    // return $vdo;
    // $post = Post::with('likes')->get();
    // return $post;
});
