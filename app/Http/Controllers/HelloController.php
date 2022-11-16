<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Activity;

class HelloController extends Controller
{
    public function index(){

        $data = Activity::all();

        return view('coba.hello', compact('data'));
    }

    public function getAbout(){
        return view('coba.about');
    }

    public function indexActivity(){
        return view('coba.activity');
    }

    public function storeActivity(Request $request){
        $request->validate([
            'nama_activity' => 'required'
        ]);

        Activity::create($request->all());

        return redirect()->route('index')
        ->with('success','Selemat Activity Berhasil Dibuat!');

    }

    public function indexEditActivity($id){

        // $data = Activity::get();
        //dd($data);
        $data = Activity::where('id',$id)->first();
        return view ('coba.edit-data')
        ->with('data',$data);

    }

    public function updateActivity(Request $request , $id){

        Activity::where('id',$id)->update([
            'nama_activity' => $request->nama_activity
        ]);

        return redirect(route('index'));
    }
}
