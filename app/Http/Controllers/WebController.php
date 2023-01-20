<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Log;


class WebController extends Controller
{
    //

    public function drive()
    {
        Log::debug('test0');

        $a = DB::select('SELECT * FROM test_drive_detail');
        Log::debug($a);

        $id = ['a' => $a[0]->id];
        return view('welcome')->with($id);

    }

}