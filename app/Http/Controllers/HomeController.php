<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Slider;
use DB;
use App\Model\onlineExamClass;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        $allData = Slider::all();
        return view('Backend.viewUswe', compact('allData', 'menus','menuEnglisg'));
    }
}
