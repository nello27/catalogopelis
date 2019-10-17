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
    	\App\User::create([
    	'name'=>$request['name'],
    	'email'=>$request['email'],
    	'password'=> bcrypt($request['password']),
    	]);

    	return "usuario registrado";
    	
    }

    public function show($id){


    	
    }
}
