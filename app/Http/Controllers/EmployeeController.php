<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;

class EmployeeController extends Controller
{
    public function addEmployee(){
        return view('admin.employee.addEmployee');
        
    }
    public function viewEmployee(){
        
        $employeeInfo= $this->viewAllEmployeeInfo();
        $employeeInfo= Employee::paginate(12);
        return view('admin.employee.viewEmployee',['employeeInfo'=>$employeeInfo]);
        
    }
    public function viewContact(){
         $employeeInfo= $this->viewAllEmployeeInfo();
        $employeeInfo= Employee::paginate(12);
        return view('admin.employee.employeePhonbook',['employeeInfo'=>$employeeInfo]);
        
    }
    public function saveEmployee(Request $request){
      if($request->empImage!=null){
          $empImage=$request->empImage;
          $name=$empImage->getClientOriginalName();
       $uploadPath='public/image/employeeImage/';
       $empImage->move($uploadPath,$name);
       $imgUrl=$uploadPath.$name;
       $this->addNewEmployee($request,$imgUrl);
        
      }
      else{
               $this->addNewEmployee($request,'');

      }
      return redirect('employee/add')->with('message','Employee Information update Successfully');
    
    }
       private function addNewEmployee($request,$imgUrl)
      {
          $emp= new Employee();
          $emp-> firstName=$request-> firstName;
          $emp-> lastName=$request-> lastName;
          $emp->email =$request->email ;
          $emp-> phoneNumber=$request->phoneNumber ;
          $emp->fbUrl =$request-> fbUrl;
          $emp->jobStatus=$request->jobStatus ;
          $emp-> salary=$request->salary;
          $emp-> comment=$request-> comment;
          $emp->empImage =$imgUrl ;
          $emp->save();
      }
       private function viewAllEmployeeInfo(){
          return Employee::all();
      }
//      public function deleteEmployee($id){
//          $emp= Employee::find($id);
//          $emp->delete();
//          
//      }
          public function deleteEmployee($id){
        $emp= Employee::find($id);
                unlink( $emp->empImage);

        $emp->delete();
      return redirect('/employee/manage')->with('message','Employee Delete Successfully');
 
    }
    
    public function editEmployee($id){
        $employeeInfo= Employee::where('id',$id)->first();
 
         return view('admin.employee.editEmployee',['employeeInfo'=>$employeeInfo]);
        

    }
    public function updateEmployee(Request $request)
        {
    if($request->empImage!=null){
        
        unlink($request->previousImage);
        $empImage=$request->empImage;
        $name=$empImage->getClientOriginalName();
       $uploadPath='public/image/employeeImage/';
       $empImage->move($uploadPath,$name);
       $imgUrl=$uploadPath.$name;
       $this->updateExistentEmployee($request,$imgUrl);
     
        
      }
        else{
            $imgUrl=$request->previousImage;
            $this->updateExistentEmployee($request,$imgUrl); 
        }
              return redirect('/employee/manage')->with('message','Employee Update Successfully');

    }
    private function updateExistentEmployee($request,$imgUrl){
        $emp= Employee::find($request->id);
          $emp-> firstName=$request-> firstName;
          $emp-> lastName=$request-> lastName;
          $emp->email =$request->email ;
          $emp-> phoneNumber=$request->phoneNumber ;
          $emp->fbUrl =$request-> fbUrl;
          $emp->jobStatus=$request->jobStatus ;
          $emp-> salary=$request->salary;
          $emp-> comment=$request-> comment;
          $emp->empImage =$imgUrl ;
          $emp->save();
    }
    public function detailsEmployee($id){
         $employeeInfo= Employee::where('id',$id)->first();
 
         return view('admin.employee.detailsEmployee',['employeeInfo'=>$employeeInfo]);
    }
     
}
