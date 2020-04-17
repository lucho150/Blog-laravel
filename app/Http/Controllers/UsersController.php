<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
// use laracasts\flash\src\laracasts\Flash\Flash.php;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //funcion para crear un nuevo objeto user
    public function store(Request $request)
    {  
        $rules = $request->validate([
            'password' => 'required|min:8',
            'email' => 'required|email',
            'name' => 'required',
            'type' => 'required'
        ]);
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save(); 
        return redirect()->route('admin.users.index');
    
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


    //  funcion para la vista edit
    public function edit($id)
    {
       
           $user = User::find($id);
           
          return view('admin.users.edit')->with('user', $user);

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
      
         $user = User::find($id);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->type = $request->type;
         $user->save();
         return redirect()->Route('admin.users.index');
         

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  funcion para eliminar usuario 
    public function destroy( $id)
    {
        $user = User::find($id);
        if($user != null){
        $user->delete();
        return redirect()->route('admin.users.index');
    }
    }
}
