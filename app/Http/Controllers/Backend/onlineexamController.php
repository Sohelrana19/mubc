<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\menu;
use App\Model\onlineExamClass;
use App\Model\onlineExam;
use App\Model\remark;
use DB;

class onlineexamController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }




    public function onlineExamView()
    {
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        $onlineClass = onlineExamClass::all();
        return view('Backend.onlineExam', compact('onlineClass', 'menus', 'menuEnglisg'));
    }


    public function onlineExamStore(Request $request)
    {

        $data = new onlineExamClass();

        $data->classNameEnglish =$request->classNameEnglish;
        $data->classNameBangla =$request->classNameBangla;
        $data->classVersionID =$request->classVersionID;


        $data->save();

        return redirect()->route('onlineExam.view');


    }

    public function onlineClassView($id)
    {
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        $ClassVerEnglisg = DB::table('online_exams')
        ->join('online_exam_classes', 'online_exams.classID', '=', 'online_exam_classes.id')
        ->where('online_exam_classes.id', '=', $id)
        ->get();

        $clasid= onlineExamClass::find($id);
        $classsubject= onlineExam::all();

        return view('Backend.onlineClass', compact('menus', 'clasid', 'classsubject','menuEnglisg', 'ClassVerEnglisg'));
    }



    public function classSubStore(Request $request)
    {

        $data = new onlineExam();

        $data->classID =$request->classID;
        $data->versionId =$request->versionId;
        $data->subject =$request->subject;
        $data->examDate =$request->examDate;
        $data->examTime =$request->examTime;
        $data->examLink =$request->examLink;

        $data->save();

        return redirect()->back()->with('success', 'your message,here'); 
    }






//Fontend
public function examOnline()
{
    $exam = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
    $examEng  = onlineExamClass::where('classVersionID', '=', 'English')->get();
    $exremark = remark::all();

    return view('Fontend.pages.onlineexam', compact('exam', 'examEng','exremark'));
}

//Fontend


public function examFontendShedule($id)
{
    $exam = onlineExamClass::find($id);
    $exremark = remark::all();
    $ClassVerEnglisg = DB::table('online_exams')
    ->join('online_exam_classes', 'online_exams.classID', '=', 'online_exam_classes.id')
    ->where('online_exam_classes.id', '=', $id)
    ->where('Is_Active', '=', 0)
    ->get();

    return view('Fontend.pages.onlineclass', compact('exam','ClassVerEnglisg', 'exremark'));
}


//Online Class Start
        public function edit($id)
    {
        $editData= onlineExamClass::find($id);
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        return view('Backend.editClass', compact('editData', 'menus','menuEnglisg'));
    }


    public function onlineUpdate( Request $request, $id)
    {
    	$data = onlineExamClass::find($id);
        $data->classNameEnglish =$request->classNameEnglish;
        $data->classNameBangla =$request->classNameBangla;
        $data->classVersionID =$request->classVersionID;

        $data->save();

        return redirect()->route('onlineExam.view');

    }



    public function delet($id)
    {
        $user= onlineExamClass::find($id);
        $user->delete();
        return redirect()->route('onlineExam.view')->with('success', 'Data Delete Successfully');

    }

//Online Class End



//IS ACTIVE

public function editSubject($SubId)
{

    $editData= onlineExam::find($SubId);
    $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
    $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();

    return view('Backend.editSubject', compact('editData', 'menus','menuEnglisg'));

}

public function editClassUpdate(Request $request, $SubId)
{

    $data = onlineExam::find($SubId);

    $data->subject =$request->subject;
    $data->examDate =$request->examDate;
    $data->examTime =$request->examTime;
    $data->examLink =$request->examLink;
    $data->Is_Active =$request->Is_Active;

    //dd($data);
    $data->save();

    return redirect()->route('onlineExam.view');
}


}
