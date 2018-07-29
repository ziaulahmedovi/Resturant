<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageManagementController extends Controller
{
    public function viewAllIndexContent(){
               return view('admin.pages.index.viewIndexContent');

    }
}
