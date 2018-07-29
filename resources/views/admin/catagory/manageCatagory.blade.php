@extends('admin.master')
@section( 'title')
Dashboard::Manage Catagory
@endsection
@section('mainContent')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="row">
              


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          

                  <div class="x_content">

                      <h1 class="text-info text-center text-capitalize">Manage Catagory</h1>
                    <div class="table-responsive">
          <h3 class="text-center text-success">{{ Session::get('message') }}</h3>

                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">ID </th>
                            <th class="column-title">Catagory Name </th>
                            <th class="column-title">Catagory Description </th>
                            
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                           
                          </tr>
                        </thead>

                        <tbody>
                            @foreach($catagories as $data)
                          <tr class="even pointer">
                           
                            <td class=" ">{{$data->id}}</td>
                            <td class=" ">{{$data->catagoryName}}</td>
                            <td class=" ">{{$data->categoryDescription}}</td>
                            <td class=" ">
                                <a class="glyphicon glyphicon-edit text-success" href='{{url('/catagory/edit/'.$data->id)}}' title="Edit"></a>
                                <a class="glyphicon glyphicon-trash text-danger" title="Delete" href='{{url('/catagory/delete/'.$data->id)}}' onclick="return confirm('Are you sure to delete this ?');"></a>
                                
                            </td>
                        
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

