<?php

namespace App\Http\Controllers;

use App\Models\VisitorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomeIndex(){
        $ip=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visitTime= date("h:i:sa");
        $visitDate= date("d-m-Y");

        VisitorModel::insert(['ip_address'=>$ip,'visit_time'=>$visitTime,'visit_date'=>$visitDate]);

        return view('Home');
    }
}
