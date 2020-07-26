<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\menu;
use Illuminate\Support\Facades\Crypt;
class MenuController extends Controller
{
    public function index()
    {
      $this->var = [
        'menu' => menu::where(['status' => 'Aktif'])->get()
      ];
      return view('Backend.Menu.index',$this->var);
    }
    public function create()
    {
      return view('Backend.Menu.create');
    }
    public function store(Request $req)
    { 
      $req->validate([
       'name' => 'required',
       'url' => 'required',
       'status' =>'required'
      ]);
        
      menu::create([
        'name' => $req->name,
        'url' => $req->url,
        'status' => $req->status
      ]);
      return redirect('/site/admin/menu');
    }
    public function edit($id)
    {    
      return view('Backend.Menu.edit', ['menu' => menu::find($id)]);
    }
    public function update(Request $req, $id)
    {
      $req->validate([
        'name' => 'required',
        'url' => 'required',
        'status' =>'required'
       ]);
       menu::where(['id' => $id])->update([
        'name' => $req->name,
        'url' => $req->url,
        'status' => $req->status
      ]);
      return redirect('/site/admin/menu');
    }
    public function destroy($id)
    {
      menu::destroy($id);
      return redirect('/site/admin/menu');
    }
}
