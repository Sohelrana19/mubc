<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;


class admissionController extends Controller
{
    public function apply()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 31)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.apply', compact('menus','allMenus', 'submenu'));
    }


    public function fastFact()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 31)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.fastFact', compact('menus','allMenus', 'submenu'));
    }
    public function feespayment()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 31)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.feespayment', compact('menus','allMenus', 'submenu'));
    }


    public function scholarship()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 31)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.scholarship', compact('menus','allMenus', 'submenu'));
    }

    public function transfer()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 31)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.transfer', compact('menus','allMenus', 'submenu'));
    }

    public function contactUs()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 31)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.contactUs', compact('menus','allMenus', 'submenu'));
    }
}
