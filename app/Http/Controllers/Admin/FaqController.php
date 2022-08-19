<?php

namespace App\Http\Controllers\Admin;

use App\Common;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;

class FaqController extends Controller
{
    public function index(){
        $setting = Setting::where('section','faq')->first();
        $section = Section::where('section','faq')->get();
        return view('admin.sections.faqs',compact('setting','section'));
    }
    public function store(Request $req){
        $arry =[
            'heading'=>$req->heading,
            'description'=>$req->description
            
        ];
        $data = new Section;
        $data->section = 'faq';
        $data->content = json_encode($arry);
        $data->save();
        return redirect()->back();
    }
    public function update($id,Request $req){
        $setting = Setting::find($id);
        $arry =[
            'heading'=>$req->heading,
            'subheading'=>$req->subheading,
            'email'=>$req->email,
        ];
        $setting->content = $arry;
        $setting->save();
        return redirect()->back();
    }
    public function subUpdate(Request $req){
        $section = Section::find($req->id);
        $arry =[
            'heading'=>$req->heading,
            'description'=>$req->description,
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
