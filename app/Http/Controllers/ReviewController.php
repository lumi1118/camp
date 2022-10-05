<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(review $review){
        return view('posts/index')->with([
            'reviews' => $review,
            'tags' => $tag,
        ]);
    }
}
