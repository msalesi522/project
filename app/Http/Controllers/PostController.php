<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index(){
        $posts = Post::all();
//       return view('posts.index',compact('posts'));
    return response()->json($posts,200);
    }

    public function single(Post $post){
//        return view('posts.single',compact('post'));
        return response()->json($post,200);
    }

    public function create(){
//        return view('posts.create');
        return response()->json();
    }

    public function store(PostRequest $request){

        Post::create([
            'user_id'=>Auth::id(),
            ...$request->validated()
        ]);
        session()->flash('status','پست شما با موفقیت ساخته شد');
        return redirect()->route('posts.index');
    }

    public function update(Post $post){
//        return view('posts.update',compact('post'));
        return response()->json($post,200);
    }

    public function updatePost(PostRequest $request,Post $post){
        dd($request);
        $post->update($request->validated());
        return response()->json(["data"=>"ویرایش شد"],200);
//        return redirect()->route('posts.index');
    }
    public function delete(Post  $post ){
        $post->delete();
        return redirect()->route('posts.index');

    }
    public function updat(Request $request,$id){
        dd($id);
    }
}
