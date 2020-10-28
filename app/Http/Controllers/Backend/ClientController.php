<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\client;
use Illuminate\Support\Str;
class ClientController extends Controller
{
    public function index()
    {
        return view('Backend.Client.index', ['client' => client::all()]);
    }
    public function create()
    {
        return view('Backend.Client.create');
    }
    public function store(Request $req)
    {
        $req->validate([
            'nama_partner'=> 'required',
           
        ]);
        $file = $request->file('logo');
        $image = $file->move('images/logo_client/', time(). '-'. Str::limit(Str::slug($req->title), 50, ''). '-' . strtotime('now'). '.'. $file->getClientOriginalExtension()); 

        client::create([
                'nama_partner'=> $req->nama_partner,
                'slug'=>  Str::slug($req->nama_partner),
                'logo'=> $image
        ]);
          
        return redirect('/site/admin/client');
    }
    public function destroy($id)
    {
        client::destroy($id);
        return redirect('/site/admin/client');
    }
}
