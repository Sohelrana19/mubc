<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\menu;
use App\Model\onlineExamClass;
use App\Model\onlineExam;
use DB;

class homeExamTestShedule extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function onlineclassEng($id)
    {


        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();

        $ClassVerEnglisg = DB::table('online_exams')
        ->join('online_exam_classes', 'online_exams.classID', '=', 'online_exam_classes.id')
        ->where('online_exam_classes.id', '=', $id)
        ->get();

        //dd($ClassVerEnglisg);
        $clasid= onlineExamClass::find($id);
        $classsubject= onlineExam::all();
        return view('Backend.onlineClass', compact('menus', 'clasid','menuEnglisg','ClassVerEnglisg'));
    }


    public function deletSubject($SubId)
    {
        $delet= onlineExam::where('SubId', $SubId)->first();
        $delet->delete();
        return redirect()->route('onlineExam.view')->with('success', 'Data Delete Successfully');

    }

}
