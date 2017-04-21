<?php

namespace App\Http\Controllers;

use App\tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tags::all();

        return View::make('tags.index')
            ->with('tags', $tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $rules = array(
//            'name'       => 'required',
//            'email'      => 'required|email',
//            'nerd_level' => 'required|numeric'
//        );
//        $validator = Validator::make(Input::all(), $rules);
//
//        if ($validator->fails()) {
//            return Redirect::to('nerds/create')
//                ->withErrors($validator)
//                ->withInput(Input::except('password'));
//        } else {
//            $nerd = new Nerd;
//            $nerd->name       = Input::get('name');
//            $nerd->email      = Input::get('email');
//            $nerd->nerd_level = Input::get('nerd_level');
//            $nerd->save();

            return Redirect::to('tags');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);

        return View::make('tags.show')
            ->with('tag', $tag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);

        return View::make('tags.edit')
            ->with('tag', $tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $rules = array(
//            'name'       => 'required',
//            'email'      => 'required|email',
//            'nerd_level' => 'required|numeric'
//        );
//        $validator = Validator::make(Input::all(), $rules);
//
//        if ($validator->fails()) {
//            return Redirect::to('nerds/' . $id . '/edit')
//                ->withErrors($validator)
//                ->withInput(Input::except('password'));
//        } else {
//            $nerd = Nerd::find($id);
//            $nerd->name       = Input::get('name');
//            $nerd->email      = Input::get('email');
//            $nerd->nerd_level = Input::get('nerd_level');
//            $nerd->save();
//
//            // redirect
//            Session::flash('message', 'Successfully updated nerd!');
//            return Redirect::to('nerds');
//        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return Redirect::to('tags');
    }
}
