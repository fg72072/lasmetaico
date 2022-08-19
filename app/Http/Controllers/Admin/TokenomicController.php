<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TokenomicController extends Controller
{
    public function index(){
        $setting = Setting::where('section','tokenomics')->first();
        return view('admin.sections.tokenomics',compact('setting'));
    }
    public function update($id,Request $req){
        $setting = Setting::find($id);
        if ($req->hasFile('tokenomics')) {
            Common::unlinkProfilePic(json_decode($setting->content)->tokenomics);
            $image = $req->file('tokenomics');
            $name  = Common::getFileName($image);
            $path  = Common::getProfilePicPath();
            $image->move($path, $name);
        }
        else{
            $name = json_decode($setting->content)->tokenomics;
        }
        if ($req->hasFile('tax')) {
            Common::unlinkProfilePic(json_decode($setting->content)->tax);
            $image = $req->file('tax');
            $tax  = Common::getFileName($image);
            $path  = Common::getProfilePicPath();
            $image->move($path, $tax);
        }
        else{
            $tax = json_decode($setting->content)->tax;
        }
        $arry =[
            'heading'=>$req->heading,
            'tax'=>$tax,
            'tokenomics'=>$name
        ];
        $setting->content = $arry;
        $setting->save();
        return redirect()->back();
    }
}
