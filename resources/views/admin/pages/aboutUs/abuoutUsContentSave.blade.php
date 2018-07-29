@extends('admin.master')
@section( 'title')
Dashboard::Inbox
@endsection
@section('mainContent')

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                
                    <div class="x_content">
               <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                         {!!Form::open(['class'=>'form-horizontal form-label-left' ,'url'=>'/about-content/save', 'method' =>'POST'])!!}

                        
                      <span class="section text-center ">Add  {{$tableName}} Content</span>
                       <div class="item form-group">
                        <label class="col-sm-2 control-label" >Content <span class="required">*</span>
                        </label>
                           <input type="text" value="{{$tableName}}" name="contentName" hidden="">
                        <div class="col-sm-10">
                            <textarea class="form-control col-md-7 col-xs-12"  rows="20" placeholder="Write content" 
                                      name="content" required="required" > </textarea> 
                        </div>
                      </div>
                        <div class="form-group ">
                <label class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10 ">
                    <select class="form-control" name="publicationStatus" required="" >
                        
                        <option value="1" selected="" >Published</option>
                        <option value="0" >Unpublished</option> 
                    </select>
                </div>
            </div>
                          <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                    <button id="send" type="submit" class="btn btn-success btn-block btn-dark">Submit</button>

                       
                        
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
