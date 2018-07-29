
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
                   <h3 class="text-center text-success">Icons</h3>
                   <h6 class="text-center text-success">Click Publish to View The logo As your Logo</h6>
                   <div> 
        <a href="{{url('/icon-save')}}" title='' class="btn btn-dark ">
                    <span class="glyphicon glyphicon-new-window">&nbsp;ADD New Logo</span>
                </a>

                   
                   </div>
       
                   <div class="x_panel text-justify" >
                       @foreach($icons as $icon)
                       <div class="col-sm-4" style="padding: 30px;" style="box-sizing: border-box;" >
                           <div class="col-sm-12"> 
                        <h4 class="text-success">{{$icon->logoName}}</h4>
                        <h6 class=" text-success">{{$icon->logoTitle}}</h6>
                        <img  class="" width="100%" height="200px" src="{{asset($icon->logoImage)}}"  style="margin-bottom: 30px;">
                        </div>  
                         <div class="col-sm-offset-2 col-sm-10">                       
                             <a href="{{url('/icon-edit/'.$icon->id)}}" class="btn btn-success">
                                 <span class="glyphicon glyphicon-edit small">&nbsp;Edit</span>
                </a>
                             <?php if($icon->publicationStatus==0){?>
                <a href="{{url('/icon-delete/'.$icon->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="glyphicon glyphicon-trash small">&nbsp;Delete</span>
                </a>
                <?php }?>
                </div> 
              {!! Form::open( [ 'url'=>'icon-publish', 'method' =>'POST', 'class' =>'form-horizontal'] ) !!}
                        
                                  <div class="form-group">
                <div class="col-sm-12">
                    <input type="number" value="{{$icon->id}}" name="id" hidden="">
                    <select class="form-control" name="publicationStatus">
                        <option value="1" <?php if($icon->publicationStatus==1) echo"selected"?> >Published</option>
                        <?php if($icon->publicationStatus==1){} else{?>
                        <option value="0" <?php if($icon->publicationStatus==0) echo"selected" ; }?> >Unpublished</option> 
                    </select>
                </div>
            </div>
                            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" name="btn" class="btn btn-dark btn-block">Change Logo Info</button>
                </div>
            </div>
                           {!!Form::close()!!}
                       </div>
                       @endforeach
                   </div>
                   </div>
                   </div>
                   </div>
                   </div>
@endsection
      