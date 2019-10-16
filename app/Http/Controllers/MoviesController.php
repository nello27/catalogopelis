<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    	public	function home(){

    			return view('home');
    	}
		public	function catalog(){
				return view('catalog/index');
		}
		public	function productocatalog(){
				return	view('catalog/show');
		} 
}
