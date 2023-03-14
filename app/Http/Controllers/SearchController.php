<?php

namespace App\Http\Controllers;

use App\search;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function view()
    {
        $data['title'] = 'Search View';
        $data['searches'] = search::orderBy('id','desc')->get();
        $data['serial'] = 1;
        return  view('qtec.pages.search.search_list',$data);
    }

    public function create()
    {
        $data['title']='Add New';
        $data['searches'] = search::all();
        $data['users']   = User::all();
        return view('qtec.pages.search.Add_&_Edit_search',$data);
    }

    public function store(Request $request)
    {

        $data = new search();
        $data->keywords            = $request->keywords;
        $data->users               = $request->users;
        $data->time_range          = $request->time_range;
        $data->select_date         = $request->select_date;
        $data->more_filters         = $request->more_filters;

        $data->save();

        $notification = array
        (
            'message' => 'Search Created successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('view.search')->with($notification);
    }
}
