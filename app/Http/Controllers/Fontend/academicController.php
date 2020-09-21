<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;


class academicController extends Controller
{
    public function dresscode()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.dresscode', compact('menus','allMenus', 'submenu'));
    }


    public function lessonplan()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.lessonplan', compact('menus','allMenus', 'submenu'));
    }

    public function routine()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.routine', compact('menus','allMenus', 'submenu'));
    }

    public function syllabus()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.syllabus', compact('menus','allMenus', 'submenu'));
    }
    public function prospectus()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 4)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.prospectus', compact('menus','allMenus', 'submenu'));
    }
}
