<?php
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		//query all posts and order by created_at Descending, limit 5 posts per page.
		$posts = Post::orderBy('created_at','desc')->limit(5)->get();
		return view('pages.welcome')->withPosts($posts);
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