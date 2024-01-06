<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $latestPosts = Post::all();
                $posts = Post::all();
                $categories = Category::all();
                return view('website.master', compact('categories','posts','latestPosts'));
            }
            else if($usertype == 'admin')
            {
                return view('admin.dashboard')->with('success', 'Welcome to Admin Dashboard');
            }
            else
            {
                return redirect()->back();
            }
        }
    }




    // Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    public function logout()
    {
        auth()->logout();
        return redirect()->route('web.maaster');
    }

    
}
