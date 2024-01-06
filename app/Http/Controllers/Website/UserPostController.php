<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;


class UserPostController extends Controller
{
    public function createPost()
    {
        $categories = Category::all();
        return view('website.user.post', compact('categories'));
    }

    public function store(Request $request)
    {
        // This is image part
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postImage', $imagename);

        // Auth
        $user    = Auth()->user();
        $userid  = $user->id;
        $name    = $user->name;
        $usertype= $user->usertype;

        // Data Insert
        $post = new Post($request->only(['category_id']));

        $post->title        = $request->title;
        $post->category_id  = $request->category;
        $post->description  = $request->description;
        $post->image        = $imagename;
        $post->post_status  = 'pending';
        $post->user_id      = $userid;
        $post->name         = $name;
        $post->usertype     = $usertype;
        $post->save();

        // Alert::success('Congrats', 'You have Added the data Successfully!');
        toastr()->success('You have Added the data Successfully!!');
        return redirect()->back();
    }

    
}
