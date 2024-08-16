<?php

namespace App\Http\Controllers;
use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   /* public function clientdata(Request $request){

        $images = 'img__'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('clientImage'),$images );

        $cli = client::create([

            'title' => $request->tit,
            'img' => "clientImage/$images",
            'description' => $request->des,

        ]);

        $cli->save();
    }*/

   /* public function clientview() {

        $cli = client::all();
        return view('home', compact('cli'));
    }*/
}
