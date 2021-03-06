<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use Session;
use DB;
use App\Category;
use App\Post;
use App\Comment;
use View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return View::make('posts.index')->with('posts',$posts)->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return View::make('posts.create')->with('categories',$categories);
    }

    /**
     * Save a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
//        $rules = array(
//            'name'       => 'required',
//            'email'      => 'required|email',
//            'nerd_level' => 'required|numeric'
//        );
//        $validator = Validator::make(Input::all(), $rules);

        // process the login
//        if ($validator->fails()) {
//            return Redirect::to('nerds/create')
//                ->withErrors($validator)
//                ->withInput(Input::except('password'));
//        } else {
            // save
            $post = new Post;
            $post->name       = $request->get('name');
            $post->title      = $request->get('title');
            $post->anons      = $request->get('anons');
            $post->content    = $request->get('content');
            $post->url        = 'post-'.Post::all()->count() + 1;
            $post->save();

            // redirect
            Session::flash('message', 'Successfully created post!');
            return Redirect::to('posts');
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $comments = DB::table('comments')->where('posts_id', $id)->orderBy('created_at', 'asc')->get();
        return View::make('posts.show')->with('post', $post)->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return View::make('posts.edit')->with('post', $post)->with('categories', $categories);
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
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'title'      => 'required',
            'anons'      => 'required',
            'content'    => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
//        if ($validator->fails()) {
//            return Redirect::to('post/edit/' . $id)
//                ->withErrors($validator)
//                ->withInput(Input::except('password'));
//        } else {
            // save
            $post = Post::find($id);
            $post->name       = $request->get('name');
            $post->title      = $request->get('title');
            $post->anons      = $request->get('anons');
            $post->content    = $request->get('content');

            $post->save();

            // redirect
            Session::flash('message', 'Successfully updated post!');
            return Redirect::to('posts');
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $post = Post::find($id);
        $post->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the post!');
        return Redirect::to('posts');
    }
}
