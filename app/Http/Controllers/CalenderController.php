<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function viewCalender(){
        return view('admin.calender.calender');
    }
}
