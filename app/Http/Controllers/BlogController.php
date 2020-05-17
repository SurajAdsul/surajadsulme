<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        $posts = WinkPost::doesntHave('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->paginate(5);

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
        $page = WinkPage::where('slug', 'aboutme')->first();

        return view('post.page', [
            'page' => $page
        ]);
    }

//    public function screencasts()
//    {
//        $page = WinkPage::where('slug', 'screencast')->first();
//
//        return view('screencasts.screencasts', [
//            'page' => $page
//        ]);
//    }


    public function projects()
    {
        $page = WinkPage::where('slug', 'projects')->first();

        return view('projects.projects', [
            'page' => $page
        ]);
    }

    public function journal()
    {
        $posts = WinkPost::whereHas('tags', function ($query) {
            $query->where('slug', 'journal');
            })->live()
            ->orderBy('publish_date', 'DESC')
            ->get();
//dd($posts-);
        return view('journal.journal', [
            'posts' => $posts,
        ]);
    }

    public function contact()
    {
        $page = WinkPage::where('slug', 'work')->first();

        return view('contact.contact', [
            'page' => $page
        ]);
    }


    public function covid()
    {
        $page = WinkPage::where('slug', 'covid')->first();

        return view('projects.details', [
            'page' => $page
        ]);
    }

    public function sendmail(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email',
            'content' => 'required|max:900',
        ]);

        Mail::send(new ContactMail($request));
        return redirect()->back()->withSuccess('Mail sent successfully!');
    }
}
