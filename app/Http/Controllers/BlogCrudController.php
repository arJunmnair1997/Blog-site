<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blog', compact('blogs'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = new Blog();
        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $filename);
            $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('admin.blog');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        return view('admin.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        $blog->title = $validatedData['title'];
        $blog->content = $validatedData['content'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/images', $filename);
            $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('admin.blog');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        $blog->delete();

        return redirect()->route('admin.blog');
    }
}
