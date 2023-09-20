<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales()
    {

        $agents =
            [
                "Ahmed" => ["Jan" => 50, 'Feb' => 60, 'March' => 70],
                "Mohamed" => ["Jan" => 20, 'Feb' => 30, 'March' => 10],
                "Celia" => ["Jan" => 30, 'Feb' => 80, 'March' => 100],
                "Yehia" => ["Jan" => 10, 'Feb' => 70, 'March' => 30],
                "Raghda" => ["Jan" => 40, 'Feb' => 70, 'March' => 60]
            ];
        return view('page1', compact('agents'));
    }
}
