<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laracast\Flash\Flash;
use App\Segment;
use App\Story;

class SegmentAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $segments = Segment::orderBy('id','DESC')->paginate();
        return view('admin.segment.index',compact('segments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $segment = new Segment;
        $segment->user_id   = \Auth::user()->id;
        $segment->story_id  = $request->story_id;
        $segment->body      = $request->body;
        $segment->votes     = $request->votes;
        $segment->status    = $request->status;

        flash('Se ha creado el segmento')->success();
        return redirect()->route('segment.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stories = Story::get();
        return view('admin.segment.create',compact('stories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $segment = Segment::findOrFail($id);
        return view('admin.segment.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stories = Story::get();
        $segment = Segment::findOrFail($id);
        return view('admin.segment.edit',compact('id','stories'));
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
        $segment = Segment::findOrFail($id);
        $segment->fill($request->all());
        $segment->save();

        flash('El segmento se ha modificado.')->warning();
        return redirect()->route('segment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $segment = Segment::findOrFail($id);
        $segment->delete();

        flash('El segmento se ha eliminado.')->warning();
        return redirect()->route('segment.index');
    }
}
