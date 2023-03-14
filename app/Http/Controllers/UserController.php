<?php

namespace App\Http\Controllers;


use App\search;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view()
    {
        $data['title'] = 'User View';
        $data['users'] = User::orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('qtec.pages.user.user_list',$data);
    }

    public function create()
    {
        $data['title']='Add New';
        $data['users'] = User::all();
        return view('qtec.pages.user.Add_&_Edit_user',$data);
    }

    public function store(Request $request)
    {

        $data = new User();
        $data->name                = $request->name;
        $data->email               = $request->email;
        $data->phone               = $request->phone;
        $data->address             = $request->address;

        if ($request->file('image'))
        {
            $file = $request->file('image');
            $file_name = date('d.m.Y') . '_' . time() . '_' . rand(0000, 9999) . '_' . 'QTEC_' . $file->getClientOriginalName();
            $file->move(public_path('assets/images/user/'), $file_name);
            $data['image'] = $file_name;
        }

        $data->save();

        $notification = array
        (
            'message' => 'User Created successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('view.user')->with($notification);
    }


}
