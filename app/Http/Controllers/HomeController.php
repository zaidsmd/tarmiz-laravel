<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Project;

class HomeController extends Controller
{
    public function home()
    {
        return view('home',);
    }
}
