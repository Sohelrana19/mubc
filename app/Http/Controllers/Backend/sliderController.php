<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Str;
use App\Model\Slider;
use App\Model\onlineExamClass;
use DB;

class sliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sliderView()
    {
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        $allData = Slider::all();
        return view('Backend.notice', compact('menus', 'allData','menuEnglisg'));
    }

    public function sliderStore(Request $request)
    {

        $data = new Slider();

        $data->titel =$request->titel;
        $data->description =$request->description;
        $data->created_by = Auth::user()->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image_name= Str::random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/upload/notice/';
            $image_url=$upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }

        $data->save();

        return redirect()->route('slider.view');


    }
        public function edit($id)
    {
        $exam = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $examEng  = onlineExamClass::where('classVersionID', '=', 'English')->get();
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get();
        $editData= Slider::find($id);

        return view('Backend.editSlider', compact('editData','exam', 'examEng','menus','menuEnglisg'));
    }

    public function update( Request $request, $id)
    {
    	$data = Slider::find($id);

        $data->titel =$request->titel;
        $data->description =$request->description;

    	if ($request->file('image')) {
            $image = $request->file('image');
            @unlink(public_path('upload/notice/'.$data->image));
            $image_name= Str::random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='upload/notice/';
            $image_url=$upload_path.$image_full_name;
            $image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
        }

        $user=$data->save();
    	if ($user) {
                $notification=array(
                'messege'=>'Employee Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->route('slider.view')->with($notification);
            }else{
              return Redirect()->back();
             }
    }

    public function delet($id)
    {
        $user= Slider::find($id);

        $user->delete();
        return redirect()->route('slider.view')->with('success', 'Data Delete Successfully');

    }

}
