<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;


class logincontroller extends Controller
{
	public function upload()
	{
		if(Input::hasFile('name')){
			
				$file= Input::file('name');
				$name = uniqid().$file->getClientOriginalName();
				$file->move('uploads',$name);
			
				DB::table('image')->insert(['name'  => $name]);

				return redirect('/getimage');

		}
	
		
	}
	public function get()
	{
		$data = DB::table('image')->get();
		//print_r($data);
		return view('main',['dat'=>$data]);

	}
}
