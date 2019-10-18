<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){



    }

    public function create(){

    	return view('usuario.create');
    	
    }
    public function store(Request $request){
    	
    	$data = request()->all();

    \App\User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
    ]);
    
    	
    }

    public function show($id){


    	
    }
}
