
@extends('admin.master')
@section( 'title')
Dashboard::Add Employee
@endsection
@section('mainContent')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                <h3 class="text-center text-success">Slider</h3>
                <h6 class="text-center text-success">Click Publish to View The Image As your Slider Image</h6>
                <div class="col-sm-12 text-center">{{ $images->links()}}</div>

                <div> 
                    <a href="{{url('/slider/image-save')}}" title='' class="btn btn-dark ">
                        <span class="glyphicon glyphicon-new-window">&nbsp;ADD New Image</span>
                    </a>


                </div>
                <div class="x_panel">
                    <table class="table table-bordered table-responsive table-hover">
                        @foreach($images as $img)
                        <tr >
                            <td class="col-sm-9">
                                <img class="" src="{{asset($img->sliderImage)}}" width="100%" height="100%" >
                            </td>

                            <td class="col-sm-3">
                                {!! Form::open( [ 'url'=>'/slider-publish', 'method' =>'POST', 'class' =>'form-horizontal'] ) !!}

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="number" value="{{$img->id}}" name="id" hidden="">
                                        <select class="form-control" name="publicationStatus">
                                            <option>Select Publication Status</option>
                                            <option value="1"  <?php if ($img->publicationStatus == 1) echo"selected" ?>>Published</option>
                                            <option value="0" <?php if ($img->publicationStatus == 0) echo"selected" ?> >Unpublished</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" name="btn" class="btn btn-dark btn-block">Change Image Info</button>
                                    </div>
                                </div>
                                {!!Form::close()!!}
                                <div class=" col-sm-offset-2">                       
                                    <a href="{{url('/image-edit/'.$img->id)}}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-edit small">&nbsp;Edit</span>
                                    </a>
                                    <a href="{{url('/image-delete/'.$img->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this');">
                                        <span class="glyphicon glyphicon-trash small">&nbsp;Delete</span>
                                    </a> </div> 
                                <h4>{{$img->imageName}}</h4>
                                <h5>{{$img->imageTitle}}</h5>

                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection




