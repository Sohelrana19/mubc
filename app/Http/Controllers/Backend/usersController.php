<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use App\Model\onlineExamClass;

class usersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $menus = onlineExamClass::where('classVersionID', '=', 'Bangla')->get();
        $menuEnglisg =  onlineExamClass::where('classVersionID', '=', 'English')->get(); User::all();
        $allData = User::all();
        return view('Backend.viewUswe', compact('menus', 'allData','menuEnglisg'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email'
        ]);

        $data = new User();

        $data->name =$request->name;
        $data->userType =$request->userType;
        $data->email =$request->email;
        $data->password =bcrypt($request->password);

        $data->save();

        return redirect()->route('users.view');
    }

    public function edit($id)
    {
        $editData= User::find($id);
        return view('Backend.editUser', compact('editData'));
    }

    public function update(Request $request,$id)
    {

        $data = User::find($id);

        $data->name =$request->name;
        $data->userType =$request->userType;
        $data->email =$request->email;

        $data->save();
        return redirect()->route('users.view')->with('success', 'Data update Successfully');
    }

    public function delet($id)
    {
        $user= User::find($id);

        $user->delete();
        return redirect()->route('users.view')->with('success', 'Data Delete Successfully');

    }
}
