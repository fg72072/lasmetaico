<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurTokenController extends Controller
{
    public function index(){
        $setting = Setting::where('section','our-token')->first();
        return view('admin.sections.our-tokens',compact('setting'));
    }
    public function update($id,Request $req){
        $setting = Setting::find($id);
        $arry =[
            'heading'=>$req->heading,
        ];
        $setting->content = $arry;
        $setting->save();
        return redirect()->back();
    }
}
