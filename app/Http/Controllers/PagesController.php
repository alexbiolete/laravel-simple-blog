<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Welcome!',
            'description' => 'This is a simple blog developed in Laravel.'
        );
        return view('pages.index')->with($data);
    }
}
