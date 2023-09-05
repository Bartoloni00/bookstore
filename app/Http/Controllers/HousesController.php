<?php
namespace App\Http\Controllers;

class HousesController extends Controller
{
    public function index()
    {
        return view('houses/index');
    }
    public function details()
    {
        return view('houses/details');
    }
}