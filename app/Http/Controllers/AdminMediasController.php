<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Photo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class AdminMediasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photos = Photo::all();

        return view('backEnd.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $file = $request->file('file');


        $name = time() . $file->getClientOriginalName();

        $file->move('images', $name);



        Photo::create(['file'=>$name]);

        Session::flash('message', 'Photo added!');
        Session::flash('status', 'success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $photo = Photo::findOrFail($id);

        return view('backEnd.photos.show', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $photo = Photo::findOrFail($id);

        return view('backEnd.photos.edit', compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $photo = Photo::findOrFail($id);
        $photo->update($request->all());

        Session::flash('message', 'Photo updated!');
        Session::flash('status', 'success');

        return redirect('admin/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        unlink(public_path() . $photo->file);

        $photo->delete();

        Session::flash('message', 'Photo deleted!');
        Session::flash('status', 'success');

        return redirect('admin/photos');
    }

}
