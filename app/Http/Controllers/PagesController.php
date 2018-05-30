<?php
namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages.welcome');
		//return view('welcome'); if not in sub-folder
	}

	public function getAbout(){
		return "<h1>About</h1>";
	}

	public function getContact(){
		return view('pages.contact');
	}


!!!!!!!!!!!!!!!!!!!!!!
}






?>