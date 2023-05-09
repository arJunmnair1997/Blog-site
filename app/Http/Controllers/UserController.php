<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\ReplyComment;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.home');
    }
    public function view()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        return view('user.viewblogs', compact('blogs'));
    }
    public function blog($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        $cmts = Comment::with('replies')->where('blog_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        return view('user.blogmain', compact('blog', 'cmts'));
    }


    public function cmt(Request $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required',
            'name' => 'required',
            'blog_id' => 'required',
        ]);
        $id = $validatedData['blog_id'];
        $blog = Blog::find($id);
        if (!$blog) {
            abort(404);
        }

        $c = new Comment();
        $c->blog_id = $id;
        $c->name = $validatedData['name'];
        $c->content = $validatedData['comment'];

        $c->save();
        $cmts = Comment::where('blog_id', $id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);


        return view('user.blogmain', compact('blog', 'cmts'));
    }
    public function addReply(Request $request)
    {
        $validatedData = $request->validate([
            'reply' => 'required',
            'name' => 'required',
            'cmt_id' => 'required',
        ]);
        $id = $validatedData['cmt_id'];
        $comment = Comment::find($id);
        if (!$comment) {
            abort(404);
        }

        $reply = new ReplyComment();
        $reply->comment_id = $id;
        $reply->name = $validatedData['name'];
        $reply->content = $validatedData['reply'];

        $reply->save();

        return redirect()->back();
    }
}
