<?php

namespace App\Http\Controllers;
use App\Models\services;
use App\Models\client;
use App\Models\message;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function homeview() {

        $serv = services::all();
        $cli = client::all();
        return view('home', compact('serv','cli'));
    }
    public function updview() {

        $serv = services::all();
        $cli = client::all();
        return view('upd_and_del', compact('serv','cli'));
    }

    public function homedata(Request $request){

        $image = 'img_'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('img'),$image );

        $serv = services::create([

            'title' => $request->tit,
            'img' => "img/$image",
            'description' => $request->des,

        ]);

        $serv->save();
        return redirect('/add')->with('success', 'service adding successfully.');
    }

    public function clientdata(Request $request){

        $images = 'img__'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('clientImage'),$images );

        $cli = client::create([

            'title' => $request->tit,
            'img' => "clientImage/$images",
            'description' => $request->des,

        ]);

        $cli->save();
        return redirect('/add_client')->with('success', 'client adding successfully.');
    }





    public function homecontrrol($id) {

        $serv = services::findorFail($id);
        return view('edit_serv_data', compact('serv'));
    }

    public function clientEdit($id) {

        $cli = client::findorFail($id);
        return view('edit_client_data', compact('cli'));
    }


    public function update(Request $request,$id) {

        $image = 'img_'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('img'),$image );

        $serv = services::findorFail($id);

            $serv->title = $request->tit;
            $serv->img = "img/$image";
            $serv->description = $request->des;

            $serv->save();
            return redirect('/cnt')->with('success', 'service editing successfully.');
    }

    public function updateClient(Request $request,$id){

        $images = 'img__'.uniqid().'.'.$request->img->extension();
        $request->img->move(public_path('clientImage'),$images );

        $cli = client::findorFail($id);

            $cli->title = $request->tit;
            $cli->img = "clientImage/$images";
            $cli->description = $request->des;

            $cli->save();
            return redirect('/cnt')->with('success', 'client editing successfully.');
    }

    public function delete($id) {
        $serv = services::findorFail($id)->delete();
        return redirect('/cnt')->with('success', 'service deleting successfully.');
    }

    public function delete_client($id) {
        $cli = client::findorFail($id)->delete();
        return redirect('/cnt')->with('success', 'client deleting successfully.');
    }


    public function msgg(Request $request){



        $message = message::create([

            'name' => $request->name,
            'email' => $request->email,
            'msg' => $request->msg,

        ]);

        $message->save();
        return redirect('/')->with('success', 'message sending successfully.');

    }

    public function msgview() {

        $message = message::all();

        return view('msg', compact('message'));
    }

}
