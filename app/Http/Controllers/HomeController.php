<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

    public function legality()
    {
        return view('legality');
    }

    public function faq()
    {
        return view('faq');
    }
}