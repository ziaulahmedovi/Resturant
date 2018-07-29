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
                                <h3 class="text-info text-center text-capitalize">{{Session::get('message')}}</h3>


                    <div class="x_content">
            {!! Form::open( [ 'url'=>'sliderImage/save', 'method' =>'POST', 'class' =>'form-horizontal', 'enctype'=>'multipart/form-data' ] ) !!}
  <div class="form-group">
                <label class="col-sm-2 control-label">Slider Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="imageName" required="">
                </div>
            </div>
  <div class="form-group">
                <label class="col-sm-2 control-label">Slider Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="imageTitle" value="  " required="">
                </div>
            </div>
      <div class="form-group">
                <label  class="col-sm-2 control-label">Slider Image</label>
                <div class="col-sm-10">
                    <input type="file" name="sliderImage" accept="image/*" required="">
                </div>
            </div>  
      <div class="form-group hidden">
                <label class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10 ">
                    <select class="form-control" name="publicationStatus" required="" >
                        <option>Select Publication Status</option>
                        <option value="1" >Published</option>
                        <option value="0" selected="">Unpublished</option> 
                    </select>
                </div>
            </div>
                 <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-dark btn-block">Save New Slider Image</button>
                </div>
            </div>
                          {!!Form::close()!!}
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection
