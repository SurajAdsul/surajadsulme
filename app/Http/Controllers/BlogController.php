<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPage;
use Wink\WinkPost;

/**
 * Class BlogController
 * @package App\Http\Controllers
 */
class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('post.index', [
            'post' => $post
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function aboutme()
    {
        $page = WinkPage::first();

        return view('post.page', [
            'page' => $page
        ]);
    }

    public function screencasts()
    {
        $page = WinkPage::where('slug', 'work')->first();

        return view('post.page', [
            'page' => $page
        ]);
    }


    public function projects()
    {
        $page = WinkPage::where('slug', 'work')->first();

        return view('post.page', [
            'page' => $page
        ]);
    }

    public function journal()
    {
        $page = WinkPage::where('slug', 'work')->first();

        return view('post.page', [
            'page' => $page
        ]);
    }
}
