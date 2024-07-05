<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HomePage()
    {
        return view('index');
    }
    public function IntroPage()
    {
        return view('Intro');
    }
    public function ProductPage()
    {
        return view('Product');
    }
    public function ContactPage()
    {
        return view('Contact');
    }
    public function TestPage()
    {
        return view('Test');
    }
    public function PostPage()
    {
        return view('Post');
    }
    public function AgencyPage()
    {
        return view('Agency');
    }
    // public function testdb()
    // {
    //     $q = DB::table('produc_cas')->select('id', 'brand', 'model', 'year', 'price', 'mileage', 'description', 'img');
    //     $arr = $q->get();
    //     return view('index', compact('arr'));
    // }
}
