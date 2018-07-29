<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.homeContent');
    }
    public function view_product_menu(){
              return view('frontEnd.product.allProductMenu');
 }
    public function view_product_type_menu($id){
        
        $publishProduct=DB::table('products')
        ->join('catagories','products.categoryId','=','catagories.id')
           ->select('products.*','catagories.catagoryName')
                ->where('catagories.id',$id)
                ->get();
          
        
             return view('frontEnd.product.productTypeMenu',['publishProduct'=>$publishProduct]);
   }
    public function about(){
             return view('frontEnd.about.about');

    }
    public function contactUs(){
             return view('frontEnd.contactUs.contactUs');

    }
    public function cusLogin(){
             return view('frontEnd.customer.cusLogin');
               
  
    }
    public function Offers(){
        
             return view('frontEnd.Offers.Offers');
               
  
    }
}
