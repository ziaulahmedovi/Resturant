<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;

class SliderController extends Controller
{
    public function viewSliders(){
        $images= $this->viewAllSliderImage();
        return view('admin.slider.ViewsliderGallary',['images'=>$images]);
    }
    public function addSliderImage(){
        
        return view('admin.slider.addSliderImage');
    }
    public function createSliderImage(Request $request){
        
       $imgUrl= $this->imageSave($request);
       $this->createNewSliderImage($request,$imgUrl);
    return redirect('/slider/image-save')->with('message','Image Save Successfully');
    }
        public function editImage($id){
        $slider= Slider::find($id);
        return view('admin.slider.editImage',['slider'=>$slider]);
    }
    
        public function updateImage(Request $request){
           $img=$request->file('sliderImage');
    if($img){
        unlink($request->previousImage);
    $imgUrl= $this->imageSave($request);
    
    }
    else{
      $imgUrl=$request->previousImage;  
    }
    $this->updaImageById($request,$imgUrl);
        return redirect('/slider')->with('message','Image Update Successfully');

        
    }
            private function updaImageById($request,$imgUrl){
        $icon= Slider::find($request->id);
        $icon->imageName=$request->imageName;
        $icon->imageTitle=$request->imageTitle;
        $icon->publicationStatus=$request->publicationStatus;
        $icon->sliderImage=$imgUrl;
        $icon->save();
                
    }
        private function createNewSliderImage($request,$imgUrl){
        $img=new Slider();
        $img->imageName=$request->imageName;
        $img->imageTitle=$request->imageTitle;
        $img->publicationStatus=$request->publicationStatus;
        $img->sliderImage=$imgUrl;
        $img->save();
                
    }
        private function imageSave($request){
         $name = $request->imageName.".jpg";
        $uploadPath = 'public/image/sliderImage/';
        $img=$request->file('sliderImage');
         $img->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
       return $imageUrl;
    }
    private function viewAllSliderImage(){
        $image= DB::table('sliders')->orderBy('id','desc')->paginate(5);
        
        return $image;
    }
    public function deleteImage($id){
      $img= Slider::find($id);
    unlink($img->sliderImage);
    $img->delete();
        return redirect('/slider')->with('message','Icon Delete Successfully');


    }
    public function publishImage(Request $request){
     
     $publish= Slider::find($request->id);
     $publish->publicationStatus=$request->publicationStatus;

        $publish->save();
    return redirect('/slider')->with('message','Slider Set Successfully');

    }
}
