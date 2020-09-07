<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
use Session;
class ladingPageController extends Controller
{
    public function main(){
     return view('ladingPage.main');
    }//main

    public function sliderMain(){
    	$slider = DB::table('slidermain')->get();
    	return view('ladingPage.slidermain')
    	   ->with('slider', $slider);
    }//sliderMain

    public function sliderCreate(Request $request){
    	$namefile ='';
    	if (isset($request->contentVisual)) {
    	    $file = $request->file('contentVisual');
            $namefile = rand(0,100).$file->getClientOriginalName();
             Storage::disk('sliderMain')->put($namefile, \File::get($file));
    	}

        DB::table('slidermain')
        ->insert(['path' => 'img/slider/'.$namefile,
                  'title'=> $request->title,
                  'content' => $request->content,
                  'active'  => 1,
                  'created_at' => Carbon::now()]);
    Session::flash('message','Operación realizada con exito!');
    Session::flash('alert-class','alert-success');
    return redirect('/home/ladingPage/sliderMain');
    }//sliderCreate
}
