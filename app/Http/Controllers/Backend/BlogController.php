<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;
use Illuminate\Support\Str;
use Auth;
use Storage;
class BlogController extends Controller
{
    public function index()
    {
        return view('Backend.Blog.index');
    }
    public function create()
    {
        return view('Backend.Blog.create');
    }


    public function store(Request $req)
    {
        $req->validate([
            'judul'=> 'required', 
            'isi'=> 'required', 
            'status'=> 'required',
             'photo'=> 'required'
        ]);
        $data = $req->all();
        $data['photo'] = $req->file('photo')->store('uploads/blog', 'public');
        $data['slug'] = Str::slug($req->judul);
        $data['author'] = Auth::user()->name;
        blog::create($data);
        return redirect('/site/admin/blog');
    }

    Public function edit($id)
    {
        return view('Backend.Blog.edit', [
            'blog' => blog::findOrfail($id)
        ]);
    }
    public function update(Request $req, $id)
    {
        $data = blog::findOrfail($id);
        $data->judul = $req->judul;
        $data->isi = $req->isi;
        $data->status = $req->status;
        if($data->photo){
            Storage::delete('public'.$data->photo);
        }
        $data->photo = $req->file('photo') == "" ? 'uploads/blog/default.jpg' : $req->file('photo')->store('uploads/blog', 'public');
        $data->slug = Str::slug($req->judul);
        $data->author = Auth::user()->name;
        $data->save();
        return redirect('/site/admin/blog');
        // ['judul', 'isi', 'status', 'photo', 'slug', 'author'];
    }
}
