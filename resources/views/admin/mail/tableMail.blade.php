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
          

                  <div class="x_content">

                      <h1 class="text-info text-center text-capitalize">Table Mail</h1>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Invoice </th>
                            <th class="column-title">Invoice Date </th>
                            <th class="column-title">Order </th>
                            <th class="column-title">Bill to Name </th>
                            <th class="column-title">Status </th>
                            <th class="column-title">Amount </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                           
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">
                           
                            <td class=" ">demo</td>
                            <td class=" ">demo</td>
                            <td class=" ">demo</td>
                            <td class=" ">demo</td>
                            <td class=" ">demo</td>
                            <td class=" ">demo</td>
                            <td class=" ">
                                <a class="glyphicon glyphicon-edit text-success" href='#' title="Edit"></a>
                                <a class="glyphicon glyphicon-trash text-danger" title="Delete" href='#'></a>
                                
                            </td>
                        
                            </td>
                          </tr>
                        
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

