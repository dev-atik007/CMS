<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function delete($id)
    {
        $data = Post::find($id);
        if($data) {
            $data->delete();
            return redirect()->back()->with('message', 'Post delete Successfully');
        } else{
            return redirect()->back();
        }

    }

    public function postEdit($id)
    {
        $data = Post::find($id);
        $categories = Category::all();
        return view('website.user.edit', compact('data', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $data = Post::find($id);

        // This is image part
        // $image = $request->image;
        // $imagename = time().'.'.$image->getClientOriginalExtension();
        // $request->image->move('postImage', $imagename);

        $request->validate([
            'title'         => 'required|min:2, max:30, string',
            'category'      => 'required',
            'description'   => 'required|min:10, max:5000',
        ]);

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postImage',$imagename);
            $data->image        = $imagename;
        }

        $data->title        = $request->title;
        $data->category_id  = $request->category;
        $data->description  = $request->description;
        
        
        $data->save();

        return redirect()->back();

    }
}
