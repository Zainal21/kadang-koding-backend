<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\portfolio;
use Illuminate\Support\Str;
use Storage;
class PortfolioController extends Controller
{
    public function index()
    {
        return view('Backend.Portfolio.index',[
            'prt' => portfolio::all()
        ]);
    }
    public function create()
    {
        return view('Backend.Portfolio.create');
    }
    public function store(Request $req)
    {
        $req->validate([
            'nama_project' => 'required',
            'gambar' => 'required'
        ]);
        $file = $request->file('portfolio');
        $image = $file->move('images/portfolio/', time(). '-'. Str::limit(Str::slug($req->title), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension()); 
        portfolio::create([
            'nama_project' => $req->nama_project,
            'gambar' => $image,
            'kategori' => $req->kategori,
            'slug' => Str::slug( $req->nama_project)
        ]);
        return redirect('/site/admin/portfolio');
    }
    public function destroy($id)
    {
        $data = portfolio::findOrfail($id);
        if($data->gambar){
           if( file_exists($data->gambar)){
               unlink($data->gambar);
           }
        }
        portfolio::destroy($id);
        return redirect('/site/admin/portfolio');
    }
}
