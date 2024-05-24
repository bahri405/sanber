<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{

    public function create(){
        return view('cast.create');
    }
    
    public function store(Request $request){
        // buat validation dulu
        $request->validate(
            [
            'nama' => 'required|min:2',
            'umur' => 'required',
            'bio' => 'required'
            ],
            [
                'nama.required' => 'Nama harus di isi',
                'umur.required' => 'A message is required',
                'bio.required' => 'bio harus diisi',
            ]
        );
        DB::table('cast')->insert(
            [
            "nama" => $request->input('nama'),
            "umur" => $request->input('umur'),
            "bio" => $request->input('bio')
            ]);
        return redirect('/cast');

    }

    public function index()
    {
        $cast = DB::table('cast')->get();
        
        return view ('cast.tampil', ['cast' => $cast]);
    }

    public function show($id) 
    {

        $cast = DB::table('cast')->find($id);
        
        return view('cast.show', ['cast' => $cast ]);
    }

    public function edit($id)
    {
        $cast = DB::table('cast')->find($id);
        
        return view('cast.edit', ['cast' => $cast ]);
    }

    public function update(Request $request, $id)
    {   
        $request->validate([
            'nama' => 'required|min:2',
            'umur' => 'required',
            'bio' => 'required'
        ]);

        DB::table('cast')
            ->where('id', $id)
            ->update(
            [            
                'nama' => $request->input('nama'),
                'umur' => $request->input('umur'),
                'bio' => $request->input('bio')

            ]
        );
        return redirect ('/cast');
    }

    public function destroy($id){

        DB::table('cast')->where('id', '=', $id)->delete();

        return redirect('/cast');
    }
}
