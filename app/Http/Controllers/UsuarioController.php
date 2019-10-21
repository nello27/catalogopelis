<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){

        $users = User::All();
        return view('usuario.index',compact('users'));

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
        /*$request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());*/

    }

    public function show($id){


    	
    }
}
