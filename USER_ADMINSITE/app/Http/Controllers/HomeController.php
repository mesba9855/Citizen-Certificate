<?php

namespace App\Http\Controllers;
use App\Models\AboutModel;
use App\Models\FileDocModel;
use App\Models\RegistrationModel;
use Illuminate\Http\Request;
use App\Models\VisitorModel;
use App\Models\ContactModel;
use App\Models\ReviewModel;

class HomeController extends Controller
{

        function HomeIndex(){
            $TotalApply=RegistrationModel::count();
            $TotalFile=FileDocModel::count();

            return view('Home',[
                  'TotalApply'=>$TotalApply,
                  'TotalFile'=>$TotalFile,
            ]);
        }


}
