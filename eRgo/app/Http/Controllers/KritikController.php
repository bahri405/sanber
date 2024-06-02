<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kritik;
class KritikController extends Controller

{
    public function tambah($id , Request $request)
    {
        
        $request->validate([
            'content' => 'required',
            'point' => 'required',
        ]);


        $idUser = Auth::id();

        $kritik = new Kritik;

        $kritik->user_id = $idUser;
        $kritik->film_id = $id; 
        $kritik->content = $request->input('content');
        $kritik->point = $request->input('point');

        

        $kritik->save();

        return redirect('/film/'.$id);

    }
}
