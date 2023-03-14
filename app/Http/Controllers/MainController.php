<?php

namespace App\Http\Controllers;

use App\search;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function search()
    {
        $data['title'] = 'Search';
        $data['users'] = User::all();
        $data['searches'] = search::all();
        return  view('qtec.pages.search',$data);
    }

    public function word()
    {
        $data['title'] = 'Word Count';
        return  view('qtec.pages.wordCount',$data);
    }
}
