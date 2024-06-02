<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(){
        $idUser = Auth::id();

        $profile = Profile::where('user_id', $idUser)->first();
        return view('profile.index', ['profile' => $profile]);
    
    }

    public function update(Request $request, $id) {
        
        $request->validate([
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required',
        ]);

        $profile = Profile::find($id);

        $profile->umur = $request['umur'];
        $profile->bio = $request['bio'];
        $profile->alamat = $request['alamat'];
        
        $profile->save();

        return redirect('/profile');
    }
}
