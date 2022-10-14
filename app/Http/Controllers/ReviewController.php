<?php

namespace App\Http\Controllers;

use App\Review;
use App\Tag;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Review $review, Tag $tag)
    {
        return view('posts/index')->with([
            'reviews' => $review->get(),
            'tags' => $tag->get()
        ]);
    }
}
