
@extends('admin.master')
@section( 'title')
Dashboard::Add Catagory
@endsection
@section('mainContent')
 
                <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                   <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
       
                <div class="x_panel">
                  {!!Form::open(['class'=>'form-horizontal form-label-left' ,'url'=>'/category/save', 'method' =>'POST'])!!}
                   
                      <span class="section text-center">Add Catagory</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Category Name <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <input id="name" name="catagoryName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name"  required="required" type="text">
                        </div>
                      </div>
                   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Category Description <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <textarea id="textarea" rows="10" required="required" name="categoryDescription" class="form-control col-md-7 col-xs-12">     </textarea>
                        </div>
                      </div>
                 
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                             <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

      
    @endsection
   
   