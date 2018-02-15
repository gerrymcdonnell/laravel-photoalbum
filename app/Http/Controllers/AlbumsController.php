<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{

    /*public function __construct(){
        //allow these actions without login
        $this->middleware('auth',
            [
                'except'=>['index','show']
            ]
        );
    }*/


    public function index()
    {
        $albums=Album::orderBy('created_at','desc')->get();
        return view('albums.index')->with('albums',$albums);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
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
            'cover_image'=>'required',
            'description'=>'required'
        ]);

        Album::create($request->all());

        //flash message and redirect
        return redirect('/albums')
            ->with('success','Saved Listing');
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
        $album=Album::find($id);
        //return the view and pass in the todo variable
        return view('albums.show')
            ->with('album',$album);
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
        $album=Album::find($id);
        return view('albums.edit')
            ->with('album',$album);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //update the data from the edit form

    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request,[
            'name'=>'required',
            'cover_image'=>'required',
            'description'=>'required'
        ]);

        $album=Album::find($id);

        //get the input
        /**$album->name=$request->input('name');
        $album->email=$request->input('email');
        $album->website=$request->input('website');
        $album->address=$request->input('address');
        $album->phone=$request->input('phone');
        $album->bio=$request->input('bio');
        $album->user_id=auth()->user()->id;

        //save it
        //$album->save();
         **/

        //mass alignment save all inut fields
        $album->update($request->all());


        //flash message and redirect
        return redirect('/albums')
            ->with('success','Updated Listing');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /* $album=Album::find($id);
        $album->delete();
        //flash message and redirect
        return redirect('/')
            ->with('success',' deleted');*/
    }

}//end
