<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $data = Post::all();
    	return view('homepage.index', ['data' => $data]);
    }

    public function sejarah()
    {
    	return view('homepage.sejarah');
    }

    public function lokasi()
    {
    	return view('homepage.lokasi');
    }

    public function perangkat()
    {
    	return view('homepage.perangkat');
    }

    public function visimisi()
    {
    	return view('homepage.visimisi');
    }

    public function lembaga()
    {
    	return view('homepage.lembaga');
    }

    public function surat()
    {
    	return view('homepage.surat');
    }

    public function view_post($slug)
    {
        $data = Post::where('slug' , $slug)->first();
        

        return view('homepage.view_artikel' , ['data' => $data]);
    }

    public function all_post()
    {
        $data = Post::latest()->paginate(3);
        

        return view('homepage.all_artikel' , ['data' => $data]);
    }
}
