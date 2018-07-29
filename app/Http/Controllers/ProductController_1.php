<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function createProduct()
    {
        $categories=Catagory::all();
        return view('admin.product.createProduct',['categories'=>$categories]);
    }
    public function manageProduct()
    {     
        
        $products= $this->viewAllProduct();
         $products= Product::paginate(10);
        return view('admin.product.mangeProduct',['products'=>$products]);
    }
    public function viewAllProduct(){
        $products=DB::table('products')
        ->join('catagories','products.categoryId','=','catagories.id')
           ->select('products.*','catagories.catagoryName') ->get();
        
        
        return $products;
    }
    public function editProduct($id)
    {       
              $productById = Product::where('id', $id)->first();
              $categories= Catagory::all();
                 return view('admin.product.editProduct')
                        ->with('productById', $productById)
                        ->with('categories', $categories);
    }
        public function storeProduct(Request $request) {
        $this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
        ]);
        $productImage = $request->file('productImage');
        if($productImage)
        {
            $imageUrl=$this->imageExistStatus($productImage,$request);
             $this->saveProductInfo($request, $imageUrl);
        }
        else {
                    $this->saveProductInfo($request, '');

        }
        return redirect('/product/save')->with('message', 'Product info save sauccessfully');
    }
    public function imageExistStatus($productImage,$request){
           $name = $request->productName.".jpg";
        $uploadPath = 'public/image/productImage/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
       return $imageUrl;
    }

        protected function saveProductInfo($request, $imageUrl) {
        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }
    public function deleteProduct($id){
        $product= Product::find($id);
        unlink( $product->productImage);
        $product->delete();
        return redirect('/product/manage');
        
    }
    public function viewProduct($id){
        $product=DB::table('products')
        ->join('catagories','products.categoryId','=','catagories.id')
           ->select('products.*','catagories.catagoryName')
                ->where('products.id','=',$id)->first();
     return view('admin.product.detailsProduct',['product'=>$product]);
        //return $product;
    }
    
    
    
    public function updateProduct(Request $request){
           $productImage = $request->file('productImage');
        if($productImage!=null)
        { 
            //unlink($request->previousImage);
           $productImage= $this->imageExistStatus($productImage,$request);
          

        }
        else {
                    $productImage=$request->previousImage;

        }
          $this->updateProductById($request, '$productImage');
     
    }
    private function updateProductById($request,$imageUrl){
         $product = Product::find($request->id);
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->productPrice = $request->productPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productShortDescription = $request->productShortDescription;
        $product->productLongDescription = $request->productLongDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
        
    }
}
