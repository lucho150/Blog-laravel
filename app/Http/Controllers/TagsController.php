<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag; 
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $tags = Tag::search($request->name)->orderBy('id', 'ASC')->paginate(5);
        return view('admin.tags.index')->with('tags', $tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $tags  = new Tag($request->all());
        $tags->save();
        // dd($tags);
      
        return redirect()->Route('admin.tags.index')->with('tags', $tags);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
      
        $tags = Tag::find($id);
         return view('admin.tags.edit')->with('tags', $tags);



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
          
      $tags = Tag::find($id);
      $tags->name = $request->name;
      $tags->save();

      return redirect()->Route('admin.tags.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        
        $tags = Tag::find($id);
        if($tags != null){
        $tags->delete();
        }
        return redirect()->Route('admin.tags.index');
  
         
    }
}
