<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function test()
    {
        $q = DB::table('produc_cas')->select('id', 'brand', 'model', 'year', 'price', 'mileage', 'description', 'img');
        $arr = $q->get();
        return view('index', compact('arr'));
    }
}
