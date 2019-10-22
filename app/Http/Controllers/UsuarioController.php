<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
//use App\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        $users = User::All();
        return view('usuario.index',compact('users'));

    }

    public function edit($id){

       // $user = User::find($id);
        $user = User::findOrFail($id);
        return view('usuario.edit',compact('user'));
        
    }

    public function create(){

    	return view('usuario.create');
    	
    }   
    public function store(Request $request){
    

    User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
    ]);

    return redirect('usuario/index')->with('message','store');
        /*$request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());*/

    }

    public function update($id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
  
        $usuarioedit->update($request->all());
        return redirect()->route('usuario/index')
                        ->with('success','Product updated successfully');
    }

    public function show($id){


    	
    }
}
