<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DemoUser as DemoUser;

use View;

class BladePage extends Controller
{
    //
    public function showPage() {
        $demouser = DemoUser::all();
        foreach ($demouser as $user) {
            $res[] = 'user:'. $user -> acct;
        }

        $sum =  'All users:'. DemoUser::all() -> count();

        $opreateArr = ['Query', 'Add', 'Update', 'Delete'];

        return View::make('bladePage', [
            'list' => $opreateArr,
            'sum' => $sum
            // $res -> getWhere()
            //['01', '02', '03', '04']
        ]);
        // return view('flight.index', ['flights' => $flights]);
    }
}
