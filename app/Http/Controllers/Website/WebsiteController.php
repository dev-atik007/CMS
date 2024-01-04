<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('website.master', compact('posts','categories'));
    }

    public function singlePage()
    {
        return view('website.single_page.page');
    }
}
