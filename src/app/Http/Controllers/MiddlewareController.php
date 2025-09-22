<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function index()
    {
        return view('middleware.index');
    }
    public function post(Request $request)
    {
        $content = $request->content;
    }
}
