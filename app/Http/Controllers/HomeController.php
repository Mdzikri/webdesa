<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Post;
use Illuminate\Support\Str;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dash');
    }

    public function artikel()
    {
        $count_cat = Categories::count();
        $count_post = Post::count();

        
        $post = Post::latest()->get();
        return view('admin.artikel',['count_cat' => $count_cat , 'count_post' => $count_post  , 'post' => $post]);
    }

    public function artikel_all()
    {
        $cat = Categories::all();
        $count_post = Post::count();
        $data = Post::all();
        return view('admin.all_post' , ['data' => $data , 'count_post' => $count_post , 'cat' => $cat]);
    }

    public function create_post()
    {
        $file = request()->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().','.$ext;
            $file->move('uploads/image/', $filename);
        
        Post::create([

            'title' => request('title'),
            'content' => request('content'),
            'kategori' => request('kategori'),
            'slug' =>  Str::slug(request('title')),
            'image' => $filename,

        ]);
        return redirect('/dashboard/artikel/all')->with('message', 'Berhasil Dipost!');

    }
    public function edit_post($id)
    {   
        $file = request()->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename = time().','.$ext;
        $file->move('uploads/image/', $filename);
        $data = Post::find($id);

        $data->update([

            'title' => request('title'),
            'content' => request('content_edit'),
            'kategori' => request('kategori'),
            'slug' =>  Str::slug(request('title')),
            'image' => $filename,

        ]);
        return redirect('/dashboard/artikel/all')->with('message', 'Berhasil Diedit!');

    }
    public function delete_post($id)
    {
        $data = Post::find($id);

        $data->delete();
        return redirect('/dashboard/artikel/all')->with('message', 'Berhasil Dihapus!');

    }


    // categories

    public function artikel_kategori()
    {   
        $data = Categories::all();
        $count = Categories::count();
        return view('admin.kategories', ['count' => $count, 'data' => $data]);
    }

    public function create_kategori()
    {
        Categories::create([

            'name' => request('name'),

        ]);

        return redirect('/dashboard/kategori/all')->with('message', 'Berhasil Ditambahkan!');
    }

    public function edit_kategori($id)
    {
        $data = Categories::find($id);
        $data->update([
            'name' => request('name'),
        ]);

        return redirect('/dashboard/kategori/all')->with('message', 'Berhasil Diedit!');
    }

    public function delete_kategori($id)
    {
        $data = Categories::find($id);
        $data->delete();

        return redirect('/dashboard/kategori/all')->with('message', 'Berhasil Dihapus');
    }
}
