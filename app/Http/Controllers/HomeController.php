<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Mail\Contact; // Corregir la ruta de la clase Contact si es necesario
use Illuminate\Support\Facades\Mail; // Corregir el namespace de Illuminate\Support\Facades\Mail

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', ['books' => Book::All()]);
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

    public function contactResult(Request $request)
    {   
        $data = $request->only(['email','reason','message']);
        Mail::to('bookstore@gmail.com')->send(new Contact($data));
        return redirect()
                ->route('home')
                // ->with('status.type','danger')
                ->with('status.message','Email enviado exitosamente.');
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