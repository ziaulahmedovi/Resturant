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
                        {!! Form::open( [ 'url'=>'icon/update', 'method' =>'POST', 'class' =>'form-horizontal', 'enctype'=>'multipart/form-data' ] ) !!}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Logo Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="logoName" required="" value="{{$icon->logoName}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Logo Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="logoTitle" value="{{$icon->logoTitle}}" required="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Logo Image</label>
                            <div class="col-sm-10">
                                <input type="file" name="logoImage" accept="image/*" >
                                <img  class="img-responsive"  src="{{asset($icon->logoImage)}}"  style="margin-bottom: 30px;">

                            </div>
                        </div>  
                        <div class="form-group hidden">
                            <label class="col-sm-2 control-label">Publication Status</label>
                            <div class="col-sm-10 ">
                                <select class="form-control" name="publicationStatus" required="" >
                                    <option>Select Publication Status</option>
                                    <option value="1"<?php if ($icon->publicationStatus == 1) echo"selected" ?> >Published</option>
                                    <option value="0" <?php if ($icon->publicationStatus == 0) echo"selected" ?>>Unpublished</option> 
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="{{$icon->id}}" name="id">
                            <input type="hidden" value="{{$icon->logoImage}}" name="previousImage">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="btn" class="btn btn-dark btn-block">Update Logo</button>
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
