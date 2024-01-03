<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Toastr;

class UserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if($user)
        {
            $user->usertype = $request->role_as;
            $user->update();

            toastr()->success('Update successfully!');
            return redirect()->route('user.index');
        }
        toastr()->error('No User Found!');
        return redirect()->route('user.update');
    }
}
