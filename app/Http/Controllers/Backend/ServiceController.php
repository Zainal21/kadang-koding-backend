<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\service;
use Storage;
class ServiceController extends Controller
{
    public function index()
    {
        return view('Backend.Service.index', ['service' => service::all()]);
    }
    public function create()
    {
        return view('Backend.Service.create');
    }
    public function store(Request $req)
    {
        $req->validate([
            'nama_service'=> 'required',
            'deskripsi'=> 'required'
        ]);
        service::create([
            'nama_service' => $req->nama_service,
            'icon' => $req->file('icon')->store('uploads/service', 'public'),
            'deskripsi' => $req->deskripsi
        ]);
        return redirect('/site/admin/service');
    }
    public function edit($id)
    {
        return view('Backend.Service.edit', ['data' => service::find($id)]);
    }
    public function update(Request $req, $id)
    {
     if($req->file('icon') == ""){
            service::where(['id' => $id])->update([
            'nama_service' => $req->nama_service,
            'deskripsi' => $req->deskripsi
            ]);
        }else{
            $data = service::findOrfail($id);
            if($data->icon){
                Storage::delete( 'public/'. $data->icon);
            }
            service::where(['id' => $id])->update([
            'icon' => $req->file('icon')->store('uploads/service', 'public'),
            'nama_service' => $req->nama_service,
            'deskripsi' => $req->deskripsi
        ]);
        return redirect('/site/admin/service');
     }
    }
    public function destroy($id)
    {
        $data = service::findOrfail($id);
        if($data->icon){
            Storage::delete( 'public/'. $data->icon);
        }
        service::destroy($id);
        return redirect('/site/admin/service');
    }
}
