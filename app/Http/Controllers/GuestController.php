<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function addGuest(Request $request){
        $guest=new Guest;
        $guest->name=$request->guestName;
        $guest->address=$request->guestAddress;
        $guest->purpose=$request->guestPurpose;
        $guest->save();

        return redirect('/success');
    }

     public function success(){
        return view('success');
    }
}
