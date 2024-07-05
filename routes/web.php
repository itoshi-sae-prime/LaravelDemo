<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/intro', function () {
//     return view('intro');
// });
// Route::get('/product', function () {
//     return view('product');
// });

// Auth::routes();

Route::get('/', [App\Http\Controllers\PageController::class, 'HomePage'])->name('HomePage');
Route::get('/intro', [App\Http\Controllers\PageController::class, 'IntroPage'])->name('IntroPage');
Route::get('/product', [App\Http\Controllers\PageController::class, 'ProductPage'])->name('ProductPage');
Route::get('/test', [App\Http\Controllers\TinController::class, 'test'])->name('test');
// Route::get('testdb', function () {
    // $query = DB::table('produc_cas');
    // $arr = $query->get();
    // foreach ($arr as $row) {
    //     echo <<<HTML
    //     <div class='produc-cas'>
    //         <h3>{$row->brand}</h3>                
    //         <img src="{$row->img}" alt="" />             
    //     </div>
    // HTML;
    // }
//     $q = DB::table('produc_cas')->select('id', 'brand', 'model', 'year', 'price', 'mileage', 'description', 'img');
//     $arr = $q->get();
//     foreach ($arr as $row) {
//         echo "
//             <div>$row->id</div>
//             <div>$row->brand</div>
//             <div>$row->model</div>
//             <div>$row->year</div>
//             <div>$row->mileage</div>
//             <div>$row->description</div>
//             <div>$row->img</div>
//         ";
//     }
// });
