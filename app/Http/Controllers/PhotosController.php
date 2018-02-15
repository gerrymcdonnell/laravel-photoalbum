<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function index()
    {
        $photos=Photo::orderBy('created_at','desc')->get();
        return view('photos.index')->with('photos',$photos);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //validation
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email',
            'website'=>'required'
        ]);


        /**
        //create
        $photo=new Listing;
        //get the input
        $photo->name=$request->input('name');
        $photo->email=$request->input('email');
        $photo->website=$request->input('website');
        $photo->address=$request->input('address');
        $photo->phone=$request->input('phone');
        $photo->bio=$request->input('bio');
        $photo->user_id=auth()->user()->id;
        //save it
        $photo->save();
         **/

        Photo::create($request->all());

        //flash message and redirect
        return redirect('/photos')
            ->with('success','Saved ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //get the record
        $photo=Photo::find($id);
        //return the view and pass in the todo variable
        return view('photos.show')
            ->with('album',$photo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //show the edit form
    public function edit($id)
    {
        $photo=Photo::find($id);
        return view('photos.edit')
            ->with('album',$photo);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //update the data from the edit form
    /*
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email',
            'website'=>'required'
        ]);
        $photo=Listing::find($id);
        //get the input
        $photo->name=$request->input('name');
        $photo->email=$request->input('email');
        $photo->website=$request->input('website');
        $photo->address=$request->input('address');
        $photo->phone=$request->input('phone');
        $photo->bio=$request->input('bio');
        $photo->user_id=auth()->user()->id;
        //save it
        $photo->save();
        //flash message and redirect
        return redirect('/dashboard')
            ->with('success','Updated Listing');
    }*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo=Photo::find($id);
        $photo->delete();
        //flash message and redirect
        return redirect('/')
            ->with('success',' deleted');
    }
}
