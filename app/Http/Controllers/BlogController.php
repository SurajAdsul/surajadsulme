<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->simplePaginate(9);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('post.index', [
            'post' => $post
        ]);
    }

    public function aboutme()
    {
        $page = WinkPage::first();

        return view('post.page', [
            'page' => $page
        ]);
    }
}
