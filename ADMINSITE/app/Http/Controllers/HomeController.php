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
            $TotalVisitor=VisitorModel::count();
            $TotalApply=RegistrationModel::count();
            $TotalFile=FileDocModel::count();
            $TotalContact=ContactModel::count();
            $TotalAbout=AboutModel::count();
            $TotalNotice=ReviewModel::count();

            return view('Home',[
                  'TotalVisitor'=>$TotalVisitor,
                  'TotalApply'=>$TotalApply,
                  'TotalFile'=>$TotalFile,
                  'TotalContact'=>$TotalContact,
                  'TotalAbout'=>$TotalAbout,
                  'TotalNotice'=>$TotalNotice,
            ]);
        }


}
