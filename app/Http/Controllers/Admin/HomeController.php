<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $setting = Setting::where('section','home')->first();
        return view('admin.sections.home',compact('setting'));
    }
    public function update($id,Request $req){
        
        $setting = Setting::find($id);
        if ($req->hasFile('image')) {
            Common::unlinkProfilePic(json_decode($setting->content)->image);
            $image = $req->file('image');
            $name  = Common::getFileName($image);
            $path  = Common::getProfilePicPath();
            $image->move($path, $name);
        }
        else{
            $name = json_decode($setting->content)->image;
        }
        $arry =[
            'heading'=>$req->heading,
            'subheading'=>$req->subheading,
            'teaser'=>$req->teaser,
            'image'=>$name
        ];
        $setting->content = $arry;
        $setting->save();
        return redirect()->back();
    }


}
