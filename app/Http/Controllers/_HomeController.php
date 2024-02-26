<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class _HomeController extends Controller
{
    public function index() {
        $blogs = [
            [
                'title' => "Title one",
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => "Title two",
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => "Title three",
                'body' => 'this is a body text',
                'status' => 0
            ],
            [
                'title' => "Title four",
                'body' => 'this is a body text',
                'status' => 0
            ]
        ];
        return view('home', compact('blogs'));
    }
}
