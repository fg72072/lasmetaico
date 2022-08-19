<?php

namespace App\Http\Controllers;

use App\Section;
use App\Setting;
use App\FormOption;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data['home'] = $this->title('home');
        $data['buy_title'] = $this->title('buy');
        $data['buy'] = $this->section('buy');
        $data['our_token_title'] = $this->title('our-token');
        $data['feature_title'] = $this->title('feature');
        $data['features'] = $this->section('feature');
        $data['feature_second'] = $this->section('feature-second');
        $data['tokenomics'] = $this->title('tokenomics');
        $data['roadmap_title'] = $this->title('roadmap');
        $data['roadmap'] = $this->section('roadmap');
        $data['team_title'] = $this->title('team');
        $data['teams'] = $this->section('team');
        $data['faq_title'] = $this->title('faq');
        $data['faqs'] = $this->section('faq');
        $data['subscription_title'] = $this->title('subscription');

        return view('index',$data);
    }
    private function title($section){
        $home = Setting::where('section',$section)->first();
        return $home;
    }
    private function section($section){
        $home = Section::where('section',$section)->get();
        return $home;
    }
}
