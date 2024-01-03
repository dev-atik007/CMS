<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
                return view('website.master');
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
