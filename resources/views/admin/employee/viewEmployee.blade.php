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
          
          <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                  <div class="x_content">

                      <h1 class="text-info text-center text-capitalize">Employee Details</h1>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action table-responsive">
                            
                          <thead>
                          <tr class="headings text-capitalize">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">empImage </th>
                            <th class="column-title">Name </th>
                            <th class="column-title">phoneNumber </th>
                            <th class="column-title">email </th>
                            <th class="column-title">jobStatus </th>
                            <th class="column-title">salary </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                           
                          </tr>
                        </thead>

                        <tbody>
                            @foreach($employeeInfo as $data)
                          <tr class="even pointer">
                            <td class=" ">{{$data->id}}</td>   
                            <td class=" "><img src='{{asset($data->empImage)}}' class="img-responsive" width="200px" height="200px"></td>                            
                            <td class=" ">{{$data->firstName}} {{$data->lastName}}</td>
                            <td class=" ">{{$data->phoneNumber}}</td>
                            <td class=" ">{{$data->email}}</td>
                            <td class=" ">{{$data->jobStatus}}</td>
                            <td class=" ">{{$data->salary}}</td>
                            
                            <td class=" ">
                          
                                
                                   <a  class="btn btn-info" title="Details" href='{{url('/employee/details/'.$data->id)}}'>
                    <span class="glyphicon glyphicon-info-sign small"></span>
                </a>
                <a href='{{url('/employee/edit/'.$data->id)}}' class="btn btn-success " title=" Edit">
                    <span class="glyphicon glyphicon-edit small"></span>
                </a>
                <a  href='{{url('/employee/delete/'.$data->id)}}'  title="Delete" class=" btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="glyphicon glyphicon-trash small"></span>
                </a>
                            </td>
                        
                            </td>
                          </tr>
                       
                        @endforeach
                        </tbody>
                       
                      </table>
                        <div class="text-center">{{ $employeeInfo->links() }}</div>

                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

