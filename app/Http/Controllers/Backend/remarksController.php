<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;
use App\Model\onlineExamClass;
use App\Model\onlineExam;
use App\Model\remark;
use DB;

class remarksController extends Controller
{
    public function viewRemark()
    {
        //dd('ok');
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        $onlineClass = onlineExamClass::all();
        $remark = remark::all();
        return view('Backend.remarks', compact('onlineClass', 'menus', 'menuEnglisg','remark'));
    }


    public function remarkStore(Request $request)
    {

        $data = new remark();

        $data->remarksTitle =$request->remarksTitle;
        $data->remarksDescription =$request->remarksDescription;

        $data->save();

        return redirect()->back();
    }

    public function remarkEdit($id)
    {

        //dd($remarksId);

        $editData= remark::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
    
        return view('Backend.editRemark', compact('editData', 'menus','menuEnglisg'));

        // $editRemark = remark::find($remarksId);
        // $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        // $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        // $onlineClass = onlineExamClass::all();
        // return view('Backend.editRemark', compact('onlineClass', 'menus', 'menuEnglisg','editRemark'));
    }

    public function remarkUpdate(Request $request,$id)
    {
        $data = remark::find($id);

        $data->remarksDescription =$request->remarksDescription;
    
        //dd($data);
        $data->save();
    
        return redirect()->back();
    }
}
