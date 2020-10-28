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
        $file = $request->file('thumbnail');
        $image = $file->move('images/portfolio/', time(). '-'. Str::limit(Str::slug($req->title), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension()); 

        service::create([
            'nama_service' => $req->nama_service,
            'icon' => $image,
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
        if($request->hasFile('icon')){
            if(file_exists($cause->thumbnail)){
                unlink($cause->thumbnail);
            }
            $service = service::findOrfail($id);
            $file = $request->file('icon');
            $image = $file->move('images/icon/', time(). '-'. Str::limit(Str::slug($req->title), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension()); 
            service::where(['id' => $id])->update([
                        'icon' => !empty($image) ? $image : $service->icon,
                        'nama_service' => $req->nama_service,
                        'deskripsi' => $req->deskripsi
            ]);
        }
    }
    //  if($req->file('icon') == ""){
    //         service::where(['id' => $id])->update([
    //         'nama_service' => $req->nama_service,
    //         'deskripsi' => $req->deskripsi
    //         ]);
    //     }else{
    //         $data = service::findOrfail($id);
    //         if($data->icon){
    //             Storage::delete( 'public/'. $data->icon);
    //         }
    //         service::where(['id' => $id])->update([
    //         'icon' => $req->file('icon')->store('uploads/service', 'public'),
    //         'nama_service' => $req->nama_service,
    //         'deskripsi' => $req->deskripsi
    //     ]);
    //     return redirect('/site/admin/service');
    //  }
    // }
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
