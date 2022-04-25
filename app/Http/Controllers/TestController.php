<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test (int $p1, int $p2) {
        //echo "$p1 + $p2 = " . ($p1 + $p2); 
        // return view('site.test', ['x' => $p1, 'y' => $p2]); // associative arrayz
        // return view ('site.test', compact('p1', 'p2')); //compact
        return view('site.test')->with('p1', $p1)->with('p2', $p2);
    }
}
