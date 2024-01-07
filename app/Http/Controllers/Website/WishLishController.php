<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishLishController extends Controller
{
    public function wishList()
    {
        return view('website.wishlist.page');
    }
}
