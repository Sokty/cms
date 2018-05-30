<?php
namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages.welcome');
		//return view('welcome'); if not in sub-folder
	}

	public function getAbout(){
		$first = 'Sokty';
		$last = 'Eam';
		$full = $first . " " . $last;
		$email = 'soktyeam@gmail.com';
		$info = [];
		$info['id'] = '0001';
		$info['phone'] = '098 266 286';
		return view('pages.about')->withFullname($full)->withEmail($email)->withInfo($info);
	}

	public function getContact(){
		return view('pages.contact');
	}

}






?>