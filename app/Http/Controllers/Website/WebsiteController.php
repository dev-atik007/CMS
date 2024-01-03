<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website()
    {
        return view('website.master');
    }

    public function singlePage()
    {
        return view('website.single_page.page');
    }
}
