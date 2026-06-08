<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function projectDetails1()
    {
        return view('project-details');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogPost1()
    {
        return view('blog-post-1');
    }

    public function blogPost2()
    {
        return view('blog-post-2');
    }

    public function blogPost3()
    {
        return view('blog-post-3');
    }

    public function contact()
    {
        return view('contact');
    }
}
