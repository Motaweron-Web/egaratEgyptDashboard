<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $twitter=\App\Models\Social::where('id',3)->first();
        $facebook=\App\Models\Social::where('id',1)->first();
        $whatsapp=\App\Models\Social::where('id',2)->first();
        $envelope=\App\Models\Social::where('id',4)->first();


        return view('site.HomePage.index',compact('twitter','facebook','whatsapp','envelope'));
       // return 1;

    }


}
