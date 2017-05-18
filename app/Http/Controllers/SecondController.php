<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SecondController extends Controller
{
    // second test...
    public function showTextFromUrl($number = 0) {
        return $number;
    }
}
