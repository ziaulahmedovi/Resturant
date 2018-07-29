@extends('admin.master')
@section( 'title')
Dashboard::Home
@endsection
@section('mainContent')

<div class="right_col" role="main">
          <div class="">

            <div class="row">
              


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          

                  <div class="x_content">

                      <h2 class="text-info text-center text-capitalize">Employee Details</h2>
                      <div class="col-sm-3"><img src='{{asset($employeeInfo->empImage)}}' width="200px" height="200px" style="margin-bottom: 30px; ">
                          <br>   <a class="" href='{{url('/employee/edit/'.$employeeInfo->id)}}' title="Edit">
                              
                              <button class=" btn btn-success glyphicon glyphicon-edit text-success">&nbsp;Edit</button>

                          </a>
                                <a title="Delete" href='{{url('/employee/delete/'.$employeeInfo->id)}}' 
                                   onclick="return confirm('Are you sure to delete this ?');" >           <button class=" btn btn-danger glyphicon glyphicon-trash">&nbsp;Delete</button>
</a>
                      </div>
                      <div class="col-sm-9">
                          <table class="table table-bordered text-justify table-hover table-bordered">
                              <tr>
                                  <td>
                                      First Name
                                  </td>
                                  <td>
                                      {{$employeeInfo->firstName}}
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Last Name
                                  </td>
                                  <td>
                                      {{$employeeInfo->lastName}}

                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                     Email 
                                  </td>
                                  <td>
                                   {{$employeeInfo->email}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                     Phone Number 
                                  </td>
                                  <td>
                                   {{$employeeInfo->phoneNumber}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                   Facebook URL   
                                  </td>
                                  <td>
                                   {{$employeeInfo->fbUrl}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                     Job Status  
                                  </td>
                                  <td>
                                   {{$employeeInfo->jobStatus}}   
                                  </td>
                              </tr>
                          
                              <tr>
                                  <td>
                                     Salary 
                                  </td>
                                  <td>
                                   {{$employeeInfo->salary}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Comment
                                  </td>
                                  <td>
                                   {{$employeeInfo->comment}}   
                                  </td>
                              </tr>
                           
                          </table>
                      </div>
                  </div>
                    
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>

@endsection