<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;

class TeamController extends Controller
{
    public function index(){
        $setting = Setting::where('section','team')->first();
        $section = Section::where('section','team')->get();
        return view('admin.sections.team',compact('setting','section'));
    }
    public function store(Request $req){
        $image = $req->file('image');
        $name  = Common::getFileName($image);
        $path  = Common::getProfilePicPath();
        $image->move($path, $name);
        $arry =[
            'name'=>$req->heading,
            'description'=>$req->subheading,
            'image'=>$name
        ];
        $data = new Section;
        $data->section = 'team';
        $data->content = json_encode($arry);
        $data->save();
        return redirect()->back();
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
    public function subUpdate(Request $req){
        $section = Section::find($req->id);
        if ($req->hasFile('icon')) {
            Common::unlinkProfilePic(json_decode($section->content)->image);
            $image = $req->file('icon');
            $icon  = Common::getFileName($image);
            $path  = Common::getProfilePicPath();
            $image->move($path, $icon);
        }
        else{
            $icon = json_decode($section->content)->image;
        }
        $arry =[
            'name'=>$req->heading,
            'description'=>$req->subheading,
            'image'=>$icon
        ];
        $section->content = $arry;
        $section->save();
        return redirect()->back();
    }
    public function destroy($id){
        $section = Section::find($id)->delete();
        return redirect()->back();
    }


}
