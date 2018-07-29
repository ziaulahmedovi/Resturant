@extends('admin.master')
@section( 'title')
Dashboard::Home
@endsection
@section('mainContent')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="row">
              


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          

                  <div class="x_content">

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
        <hr/>
        <div class="well">
            {!! Form::open( [ 'url'=>'product/update', 'method' =>'POST', 'class' =>'form-horizontal', 'enctype'=>'multipart/form-data', 'name'=>'editProductForm'] ) !!}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" value="{{ $productById->productName }}" class="form-control" name="productName">
                    <input type="hidden" value="{{ $productById->id }}" class="form-control" name="id">
                    <span class="text-danger">{{ $errors->has('productName') ? $errors->first('productName') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name="categoryId">
                        <option>Select Category Name</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" 
                                <?php if($category->id==$productById->categoryId){echo'selected';}?>
                                > {{ $category->catagoryName }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
         
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="number" value="{{ $productById->productPrice }}"  class="form-control" name="productPrice">
                    <span class="text-danger">{{ $errors->has('productPrice') ? $errors->first('productPrice') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="number" value="{{ $productById->productQuantity }}"  class="form-control" name="productQuantity">
                    <span class="text-danger">{{ $errors->has('productQuantity') ? $errors->first('productQuantity') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Product Short Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="productShortDescription" rows="5">{{ $productById->productShortDescription }}</textarea>
                    <span class="text-danger">{{ $errors->has('productShortDescription') ? $errors->first('productShortDescription') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Product Long Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="productLongDescription" rows="12">{{ $productById->productLongDescription }}</textarea>
                    <span class="text-danger">{{ $errors->has('productLongDescription') ? $errors->first('productLongDescription') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
                <div class="col-sm-10">
                    <input type="file" name="productImage" accept="image/*">
                    <input type="text" value="{{ asset($productById->productImage) }}" hidden="" name="previousImage">
                    <img src="{{ asset($productById->productImage) }}" alt="" class="img-responsive">
                    <span class="text-danger">{{ $errors->has('productImage') ? $errors->first('productImage') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="publicationStatus" required="required">
                        <option>Select Publication Status</option>
                        <option value="1" <?php if($productById->publicationStatus==1) {echo 'selected';}?>  >Published</option>
                        <option value="0" <?php if($productById->publicationStatus==0) {echo 'selected';}?> >Unpublished</option> 
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Update Product Info</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

