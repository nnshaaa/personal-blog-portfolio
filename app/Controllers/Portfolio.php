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
        return view('project-details-lakaranimpian');
    }

    public function projectDetails2()
    {
        return view('project-details-heykawan');
    }

    public function projectDetails3()
    {
        return view('project-details-eduhub');
    }

    public function projectDetails4()
    {
        return view('project-details-speakhand');
    }

    public function projectDetails5()
    {
        return view('project-details-iot');
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

    public function blogPost4()
    {
        return view('blog-post-4');
    }

    public function blogPost5()
    {
        return view('blog-post-5');
    }

    public function blogPost6()
    {
        return view('blog-post-6');
    }

    public function contact()
    {
        return view('contact');
    }
}
