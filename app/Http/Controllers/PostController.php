<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\TransactionRequest;
use Illuminate\Http\Request;
use Session;
use Auth;

class PostController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index(Request $request)
  {
      $posts = Post::all();

      return view('post/index', compact('posts'));
  }

  public function create()
  {
      return view('post/form');
  }

  public function store(Request $request)
  {
    $akun = Post::create([
        'title' => $request->title,
        'date' => date("Y/m/d"),
        'content' => $request->content,
        'username' => Auth::user()->username
    ]);

    Session::flash('success','Successfully created post data');

    return redirect()->route('post.index');
  }

  public function edit(Request $request)
  {
      $post = Post::find($request->id);

      return view('post/form', compact('post'));
  }

  public function update(Request $request)
  {
      $post = Post::find($request->id)->update
      ([
        'title' => $request->title,
        'date' => date("Y/m/d"),
        'content' => $request->content,
        'username' => Auth::user()->username
      ]);

      Session::flash('success','Successfully updated post data');

      return redirect()->route('post.index');
  }

  public function delete(Request $request, Post $post)
  {
      $post = Post::find($request->id);
      $post->delete();

      return redirect()->route('post.index');
  }
}
