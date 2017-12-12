<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracast\Flash\Flash;
use App\Story;
use App\Tag;

class StoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::orderBy('id','DESC')->paginate();
        $stories->each(function($stories){
            $stories->user;
            
        });
        return view('admin.story.index',compact('stories')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::pluck('name','id')->all();
        return view('admin.story.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new Story;
        $story->user_id   = \Auth::user()->id;
        $story->tag_id    = $request->tag_id;
        $story->title     = $request->title;
        $story->slug      = str_slug($request->title);
        $story->votes     = $request->votes;  
        $story->status    = $request->status;
        $story->save();

        flash('La Historia se ha creado.')->success();
        return redirect()->route('stories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Story::findOrFail($id);
        return view('admin.story.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::pluck('name','id')->all();
        $story = Story::findOrFail($id);
        return view('admin.story.edit', compact('story','tags'));
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
        $story = Story::findOrFail($id);
        $story->fill($request->all());
        $story->save();

        flash('La Historia se ha modificado.')->warning();
        return redirect()->route('stories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::findOrFail($id);
        $story->delete();

        flash('La historia se ha eliminado')->warning();
        return redirect()->route('stories.index');

    }
}
