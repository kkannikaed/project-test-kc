<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fromtestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/driveinfo', 'WebController@driveinfo')->name('driveinfo');

//การสร้าง route หมายถึงการสร้าง path link

// Route::get('/formtest', function () {
//     return view('formtest');

// });

// Route::get('/', [fromtestController::class, 'index']);



Route::get('/testbody', function () {
    // return view('testbody.index');
    // echo "ทดสอบร่างกาย";
    return view('testbody');
});

Route::get('/testtheory', function () {
    // echo "ทดสอบภาคทฤษฎี";
    return view('testtheory');
});

Route::get('/testoperate', function () {
    // echo "ทดสอบภาคปฏิบัติ";
    return view('testoperate');
});

Route::get('/testdrive', function () {
    echo "ทดสอบขอใบอนุญาตขับขี่";
});