<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use DB;

class CatagoryController extends Controller
{
    public function addCatagory(){
        return view('admin.catagory.addCatagory');
    }
    public function manageCatagory(){
        $catagories= $this->viewAllCatagoryInfo();
        return view('admin.catagory.manageCatagory',['catagories'=>$catagories]);
    }
    private function viewAllCatagoryInfo(){
        return Catagory::all();
    }
    public function saveCatagory(Request $request){
      DB::table('catagories')->insert([
          'catagoryName'=>$request->catagoryName,
          'categoryDescription'=>$request->categoryDescription,
      ]);
     return redirect('/catagory/add')->with('message','Catagory Save Successfully');
      
    }
    public function deleteCatagory($id){
        $catagory= Catagory::find($id);
        $catagory->delete();
      return redirect('/catagory/manage')->with('message','Catagory Delete Successfully');
 
    }
    public function editCatagory($id){
//     $catagoryById= Catagory::where('id',$id)->first();
//
//        return view('admin.catagory.editCatagory',['catagoryById=>'$catagoryById]);
//        
           $categoryById = Catagory::where('id',$id)->first();
        return view('admin.catagory.editCatagory',['categoryById'=>$categoryById]);
       
        
     
    }
    
    public function updateCatagory(Request $request){
     
        $catagory= Catagory::find($request->id);
        $catagory->catagoryName=$request->catagoryName;
        $catagory->categoryDescription=$request->categoryDescription;
        $catagory->save();
        
           return redirect('/catagory/manage')->with('message','Catagory Update Successfully');
  
        
    }
}
