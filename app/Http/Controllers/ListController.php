<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ListController extends Controller
{
    function showData(){
        $data = Member::all();
        return view('list',['memberdata'=>$data]);


    }
}