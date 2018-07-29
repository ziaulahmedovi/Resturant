<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerMail;
use DB;

class CustomerController extends Controller
{ 
    public function viewMail(){
      $mails= $this->viewAllMAil();
      $inbox= $this->latestMail();
      
       return view('admin.mail.inbox',['mails'=>$mails,'inbox'=>$inbox]);
//       return view('admin.mail.inbox');
   }
   
    public function tableMail(){
        return view('admin.mail.tableMail');
    }
   public function mailTocompany(Request $request){
       $this->saveMail($request);
       return redirect('/contact-us')->with('message','Successfully Send');
   }
   public function saveMail($request){
      $mail= new CustomerMail();
      $mail->CusName =$request->CusName;
      $mail->email =$request->email;
      $mail->phoneNumber =$request->phoneNumber;
      $mail->mail =$request->mail;
      $mail->save();
   }
   public function viewMailById($id){
       $inbox= CustomerMail::find($id);
       $mails= $this->viewAllMAil();
    
       return view('admin.mail.inbox',['mails'=>$mails,'inbox'=>$inbox]);
   }
   public function deleteMailById($id){
     $inbox= CustomerMail::find($id);
     $inbox->delete();
      
       return redirect('/mail');
 
   }
   private function viewAllMAil(){
       $mails=DB::table('customer_mails')
               ->orderBy('created_at','desc')
               ->paginate(10)
               ;
       
       return $mails;
   }
   private function latestMail(){
       $inbox = DB::table('customer_mails')
                ->latest()
                ->first();
       return $inbox;
   }
}
