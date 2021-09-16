<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function comingsoon()
    {
        return view('errors.comingsoon', [
            'title' => 'Coming Soon'
        ]);
    }
}
