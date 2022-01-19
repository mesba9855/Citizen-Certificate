<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewModel;

class ReviewController extends Controller
{
    function NoticeIndex(){
        return view('Review');
    }

    function getNoticeData(){
        $result=json_decode(ReviewModel::orderBy('id','desc')->get());
        return $result;
    }


    function NoticeDelete(Request $req){
        $id=$req->input('id');
        $result=ReviewModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getNoticeDetails(Request $req){
        $id=$req->input('id');
        $result=ReviewModel::where('id','=',$id)->get();
        return $result;
    }


    function NoticeUpdate(Request $req){
        $id=$req->input('id');
        $title=$req->input('title');
        $des=$req->input('des');

        $result=ReviewModel::where('id','=',$id)->update([
            'title'=>$title,
            'des'=>$des,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function NoticeAdd(Request $req){
        $title=$req->input('title');
        $des=$req->input('des');

        $result= ReviewModel::insert([
            'title'=>$title,
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
