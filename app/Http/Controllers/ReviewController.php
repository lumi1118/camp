<?php

namespace App\Http\Controllers;

use App\Review;
use App\Tag;
use App\Site;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Site $site, Tag $tag)
    {
        return view('camps/index')->with([
            'sites' => $site->get(),
            'tags' => $tag->get()
        ]);
    }
    
    public function create(Tag $tag)
    {
        return view('camps/create')->with(['tags' => $tag->get()]);
    }
    
    public function site(Site $site, Review $review, Tag $tag)
    {
        return view('camps/site')->with([
            'sites' => $site->get(),
            'reviews' => $review->get(),
            'tags' => $tag->get()
            ]);
    }
}
