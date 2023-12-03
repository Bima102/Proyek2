<?php

namespace App\Http\Controllers;

//import Model "Post

use App\Models\admin;
use App\Models\Post;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }
}