<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $members = Member::all();
        $members = Member::orderBy('id', 'desc')->take(4)->get();

        // return view('front.index');
        return view('front.index', compact('members'));
    }
}
