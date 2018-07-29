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
     
        <div class="well">
            {!! Form::open( [ 'url'=>'product/save', 'method' =>'POST', 'class' =>'form-horizontal', 'enctype'=>'multipart/form-data' ] ) !!}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="productName" >
                    <span class="text-danger">{{ $errors->has('productName') ? $errors->first('productName') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Category Name</label>
                <div class="col-sm-10">
                    <select class="form-control" name="categoryId">
                        <option>Select Category Name</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->catagoryName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="productPrice">
                    <span class="text-danger">{{ $errors->has('productPrice') ? $errors->first('productPrice') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Quantity</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="productQuantity">
                    <span class="text-danger">{{ $errors->has('productQuantity') ? $errors->first('productQuantity') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Product Short Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" required="required" 
                              name="productShortDescription" rows="5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
                    <span class="text-danger">{{ $errors->has('productShortDescription') ? $errors->first('productShortDescription') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3"  class="col-sm-2 control-label">Product Long Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control"required="required" name="productLongDescription" rows="12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</textarea>
                    <span class="text-danger">{{ $errors->has('productLongDescription') ? $errors->first('productLongDescription') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Product Image</label>
                <div class="col-sm-10">
                    <input type="file" name="productImage" accept="image/*">
                    <span class="text-danger">{{ $errors->has('productImage') ? $errors->first('productImage') : '' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="publicationStatus">
                        <option>Select Publication Status</option>
                        <option value="1" >Published</option>
                        <option value="0">Unpublished</option> 
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-dark btn-block">Save Product Info</button>
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

