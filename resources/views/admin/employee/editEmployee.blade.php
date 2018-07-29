  
    
    
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
                <div class="x_panel">
                   <h3 class="text-center text-success">{{ Session::get('message') }}</h3>
                  <div class="x_content">

 {!!Form::open(['class'=>'form-horizontal form-label-left' ,'url'=>'/employee/update', 'method' =>'POST','enctype'=>'multipart/form-data'])!!}


                      <span class="section text-center ">Add Employee</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="firstName" value="{{$employeeInfo->firstName}}" placeholder="First Name" required="required" type="text">
                            <input  name="id" value="{{$employeeInfo->id}}" type="number" hidden>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="lastName" value="{{$employeeInfo->lastName}}"placeholder="Last Name" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" value="{{$employeeInfo->email}}" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                    
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Facebook URL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="website" name="fbUrl" required="required" value="www.facebook.com/{{$employeeInfo->fbUrl}}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Job Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text"value="{{$employeeInfo->jobStatus}}" name="jobStatus" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Phone Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="number" value="{{$employeeInfo->phoneNumber}}" name="phoneNumber" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Salary <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="number" value="{{$employeeInfo->salary}}" name="salary" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Image <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="number"  name="empImage" accept="image/*"  data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                          <img src='{{asset($employeeInfo->empImage)}}' width="200px" height="200px">
                          <input  name="previousImage" value="{{$employeeInfo->empImage}}" type="text" hidden="" >
         
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Textarea <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="textarea" required="required"  name="comment" class="form-control col-md-7 col-xs-12">{{$employeeInfo->comment}}</textarea>
                        </div>
                      </div>
             
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <a href="{{url('/employee/add')}}"> <button type="" class="btn btn-primary">Cancel</button> </a> 
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
   
   