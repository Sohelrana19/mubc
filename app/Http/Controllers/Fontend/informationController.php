<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\menu;
use App\Model\Slider;

class informationController extends Controller
{
    public function notice()
    {
        $notice = Slider::orderBy('id', 'DESC')->get();
        return view('Fontend.pages.notice', compact('notice'));
    }


    public function facilities()
    {
        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 21)->get();
        $allMenus = menu::all();
        return view('Fontend.pages.facilities', compact('menus','allMenus', 'submenu'));
    }

    public function noticeview($id)
    {

        $menus = menu::where('ParentId', '=', 0)->get();
        $submenu = menu::where('ParentId', '=', 21)->get();
        $allMenus = menu::all();
        $allNotice = Slider::find($id);
        return view('Fontend.pages.viewNoticedetail', compact('menus','allMenus', 'submenu', 'allNotice'));
    }

}
