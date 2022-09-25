<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

class WebController extends Controller
{
    public function showHome()
    {
        $request = Request::create('/api/blog');
        $response = Route::dispatch($request)->getOriginalContent()['data'];

        return view('blog')
            ->with('title', 'Home')
            ->with('blogs', $response);
    }

    public function showHomeDetail($id)
    {
        $request = Request::create("/api/blog/$id");
        $response = Route::dispatch($request)->getOriginalContent()['data'];

        return view('blog_detail')
            ->with('title',  $response->title)
            ->with('blog', $response);
    }
}
