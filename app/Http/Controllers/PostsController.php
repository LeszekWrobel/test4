<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /*
    public function __construct()
    {
        $this->middlewere('auth');
    }
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = Post::all();  $posts = Post::orderBy('column', 'DESC');
       //$posts = Post::orderBy('id', 'DESC');
        $posts = Post::paginate(3);
     //   $posts = Post::where('user_id', auth()->id()->get());
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //  $posts = Post::all();
      // return view('posts.create',compact('posts')) ;
      return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*        $attributes =  request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
        ]);
        
*/
        request()->validate([
            'title' => ['required', 'min:3'],
            'description' => 'required'
          ]); 

/*
        $post = new Post;
        $post->title = request('title');
        $post->description = request('description');
        $post->image = request('image');
        $post->user_id = 1;//Autch()->id;

       $post->save();
*/
/**/
       Post::create(request(['title','description','image','user_id']));
       return redirect('posts');//->with('message', 'Your data updated successfully');

       // Post::create($attributes + ['user_id'=>auth()->id()]);
       return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show(Post $post)
   // public function show($id)
    {
      //   $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit(Post $post)
   // public function edit($id)
    {
       // $post = Post::find($id);
        return view('posts.edit', compact('post')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = request('title');
        $post->description = request('description');
        $post->image = request('image');
        $post->user_id = 1;//Autch()->id;
        $post->save();

        //$post->update(request(['title','description','image','user_id']));
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Post $post)
    //public function destroy($id)
    {
        //Post::find($id)->delete();
        $post->delete();
        return redirect('posts');
    }
}
