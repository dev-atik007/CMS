<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Toastr;
use App\Http\Requests\Admin\CategoryFormRequest;

use Illuminate\Database\Eloquent\Model;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function post(CategoryFormRequest $request)
    {
        $data = new Category($request->only(['name']));

        $data->name = $request->category;
        $data->save();

        if ($data instanceof Model) {
            toastr()->success('Data has been saved successfully!');

            return redirect()->route('category.index');
        }
        toastr()->error('An error has occurred please try again later.');

        return back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $data = Category::find($id);

        $request->validate([
            'category'  =>  'required|min:2, max:100, string',
        ]);

        
        $data->name = $request->category;
        $data->save();


        if ($data instanceof Model) {
            toastr()->success('Data successfully updated !');

            return redirect()->back();
        }
        toastr()->error('An error has occurred please try again later.');

        return back();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        if($category) {
            $category->delete();
            return redirect()->back()->with('message', 'Data Delete Successfully');
        } else {
            return redirect()->route('category.index');
        }
    }
}
