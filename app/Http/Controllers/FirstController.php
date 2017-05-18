<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FirstController extends Controller
{
    // First test...
    public function showName($name = '') {
        $res = 'res';
        return $res;
    }
}
