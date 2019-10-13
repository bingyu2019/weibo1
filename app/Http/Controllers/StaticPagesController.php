<?php


namespace App\Http\Controllers;


class StaticPagesController
{
    public function home()
    {
        return view('static_pages.home');
    }

    public function about()
    {
        return view('static_pages.about');
    }

    public function help()
    {
        return view('static_pages.help');
    }
}
