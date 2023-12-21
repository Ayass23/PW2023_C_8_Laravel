<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;


class HomeController extends Controller
{
    public function index()
    {
        //get movie
        $konser = Konser::latest()->paginate();
        //render view with posts
        return view('Homepage', compact('konser'));
    }
}
