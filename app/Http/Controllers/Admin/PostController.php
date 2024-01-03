<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\Admin\PostFormRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

    public function store(PostFormRequest $request)
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
        $post->is_publish   = $request->is_publish;
        $post->save();

        if ($post instanceof Model) {
            toastr()->success('Data has been saved successfully!');

            return redirect()->route('posts.index');
        }
        toastr()->error('An error has occurred please try again later.');

        return back();
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.post.edit', compact('categories','post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        // This is image part
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postImage', $imagename);

        $post->title        = $request->title;
        $post->category_id  = $request->category;
        $post->description  = $request->description;
        $post->image        = $imagename;
        $post->save();

        toastr()->success('Data successfully updated !');
        return redirect()->back();

    }

    public function delete($id)
    {
        $post = Post::find($id);
            if ($post) {
                $post->delete();
                return redirect()->back()->with('message', 'Data Delete Successfully');
            } else {
                return redirect()->route('post.index');
            }
    }


}
