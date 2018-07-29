<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icon;
use DB;

class IconController extends Controller
{
    public function viewIcons(){
        $icons=Icon::all();
        return view('admin.icons.icons',['icons'=>$icons]);
    }
    public function editIcon($id){
        $icon=Icon::find($id);
        return view('admin.icons.editIcon',['icon'=>$icon]);
    }
    public function saveIcon(){
        return view('admin.icons.saveIcon');
    }
    public function createIcon(Request $request){
       $imgUrl= $this->imageSave($request);
       $this->createNewIcon($request,$imgUrl);
    return redirect('/icon-save')->with('message','Icon Save Successfully');

    }
    public function publishIcon(Request $request){
     $icons=Icon::all();
     $icon=Icon::find($request->id);
     if($request->publicationStatus==1){
         foreach ($icons as $data){
         $data->publicationStatus=0;
         $data->save();

         }
   
     }
     $icon->publicationStatus=$request->publicationStatus;

        $icon->save();
    return redirect('/icon')->with('message','Icon Set Successfully');

    }
    private function imageSave($request){
         $name = $request->logoName.".jpg";
        $uploadPath = 'public/image/logoImage/';
        $img=$request->file('logoImage');
         $img->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
       return $imageUrl;
    }
    private function createNewIcon($request,$imgUrl){
        $icon=new Icon();
        $icon->logoName=$request->logoName;
        $icon->logoTitle=$request->logoTitle;
        $icon->publicationStatus=$request->publicationStatus;
        $icon->logoImage=$imgUrl;
        $icon->save();
                
    }    public function updateIcon(Request $request){
        $img=$request->file('logoImage');
    if($img){
        unlink($request->previousImage);
    $imgUrl= $this->imageSave($request);
    
    }
    else{
      $imgUrl=$request->previousImage;  
    }
    $this->updateIconById($request,$imgUrl);
        return redirect('/icon')->with('message','Icon Update Successfully');

    }
        private function updateIconById($request,$imgUrl){
        $icon=Icon::find($request->id);
        $icon->logoName=$request->logoName;
        $icon->logoTitle=$request->logoTitle;
        $icon->publicationStatus=$request->publicationStatus;
        $icon->logoImage=$imgUrl;
        $icon->save();
                
    }
    public function deleteIcon($id){
      $icon=Icon::find($id);
    unlink($icon->logoImage);
    $icon->delete();
        return redirect('/icon')->with('message','Icon Delete Successfully');


    }
}
