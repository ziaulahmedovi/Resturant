@extends('admin.master')
@section( 'title')
Dashboard::Home
@endsection
@section('mainContent')
   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Phone Book</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                  

                      <div class="clearfix"></div>
                      <div class="Col-sm-12 text-center">{{ $employeeInfo->links() }}</div>
                      @foreach($employeeInfo as $data)
                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i>{{$data->jobStatus}}</i></h4>
                            <div class="left col-xs-7">
                              <h2>{{$data->lastName}}</h2>
                              <p><strong>Salary: </strong> {{$data->salary}} </p>
                              <ul class="list-unstyled">
                              
                                  <li><i class="fa fa-phone"></i>&nbsp;&nbsp;{{$data->phoneNumber}} </li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src='{{asset($data->empImage)}}' alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                           
                            <div class="col-xs-12 col-sm-6 emphasis">
                                <a href="{{url('/employee/details/'.$data->id)}}">
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> View Profile
                              </button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
 
               
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection

