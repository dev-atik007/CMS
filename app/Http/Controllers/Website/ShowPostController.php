<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowPostController extends Controller
{
    public function showPost()
    {
        $user    = Auth::user();
        $user_id = $user->id;
        $data    = Post::where('user_id','=',$user_id)->get();
        return view('website.user.show_post', compact('data'));
    }
}
