<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Aboutservice;
use App\Models\Hero;
use App\Models\Intro;
use App\Models\Member;
use App\Models\Topheader;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $members = Member::all();
        $members = Member::orderBy('id', 'desc')->take(4)->get();
        $topheader = Topheader::orderBy('id', 'desc')->take(1)->first();
        $hero = Hero::orderBy('id', 'desc')->take(1)->first();
        $about = About::orderBy('id', 'desc')->take(1)->first();
        $aboutservices = Aboutservice::orderBy('id', 'desc')->take(4)->get();
        $intro = Intro::orderBy('id', 'desc')->take(1)->first();

        // return view('front.index');
        return view('front.index', compact('members', 'topheader', 'hero', 'about', 'aboutservices', 'intro'));
    }
}
