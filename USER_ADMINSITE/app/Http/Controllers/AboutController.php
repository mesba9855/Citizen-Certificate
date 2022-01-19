<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function AboutIndex(){
        return view('About');
    }

    function getAboutData(){
        $result=json_decode(AboutModel::orderBy('id','desc')->get());
        return $result;
    }

    function AboutDelete(Request $req){
        $id=$req->input('id');
        $result=AboutModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getAboutDetails(Request $req){
        $id=$req->input('id');
        $result=AboutModel::where('id','=',$id)->get();
        return $result;
    }


    function AboutUpdate(Request $req){
        $id=$req->input('id');
        $des=$req->input('des');

        $result=AboutModel::where('id','=',$id)->update([
            'id'=>$id,
            'des'=>$des,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function AboutAdd(Request $req){
        $des=$req->input('des');

        $result= AboutModel::insert([
            'des'=>$des,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

}
