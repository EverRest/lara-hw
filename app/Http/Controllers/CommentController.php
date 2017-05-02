<?php
/**
 * Created by PhpStorm.
 * User: Pavlo
 * Date: 02.05.2017
 * Time: 21:53
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Validator;
use Session;
use App\Category;
use App\Comment;
use View;

class CommentController extends Controller
{
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
        $comment = new Comment;
        $comment->name       = $request->get('author');
        $comment->posts_id      = $request->get('post_id');
        $comment->message    = $request->get('comment');
        $comment->save();

        // redirect
        Session::flash('message', 'Successfully created comments!');
        return Redirect::to('post/'.$request->get('post_id'));
//        }
    }

}