<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WebController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function faculty()
    {
         return view('frontend.faculty');
    }
    public function students()
    {
        return view('frontend.students');
    }
    public function achievements()
    {
        return view('frontend.achievements');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function academics()
    {
         return view('frontend.academics');
    }
}
