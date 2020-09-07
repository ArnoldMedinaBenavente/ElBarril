<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
use DB;
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
    	
    	if (isset($request->contentVisual)) {
    	    $file = $request->file('contentVisual');

    	}
    
    
    }//sliderCreate
}
