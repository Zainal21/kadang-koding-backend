<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\setting;
use Storage;
class SettingController extends Controller
{
    public function index()
    {
        return view('Backend.Settings.index',[
           'stg' => setting::find(1)
        ]);
    }
    public function update(Request $req)
    {
        $data = setting::find(1);
        $data->Nama_perusahaan = $req->Nama_perusahaan;
        $data->tagline = $req->tagline;
        $data->deskripsi = $req->deskripsi;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->url_website = $req->url_website ;
        if($data->logo){
            Storage::delete('public/'.$data->logo);
        }
        $data->logo = $req->file('logo') == "" ? $data->logo : $req->file('logo')->store('uploads/setting/logo', 'public');
        if($data->Hero_cover){
            Storage::delete('public/'.$data->Hero_cover);
        }
        $data->Hero_cover =  $req->file('Hero_Cover') == "" ? $data->Hero_cover :  $req->file('Hero_Cover')->store('uploads/setting/hero', 'public');
        $data->save();
        return redirect()->back();
        // 'Nama_perusahaan', 'tagline', 'deskripsi', 'email', 'phone', 'url_website', 'logo', 'Hero_Cover'
    }
}
