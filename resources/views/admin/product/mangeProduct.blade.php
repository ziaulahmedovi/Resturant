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

                      <h3 class="text-info text-center text-capitalize">{{Session::get('message')}}</h3>
                      <h1 class="text-info text-center text-capitalize">Product Details</h1>
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                       
                            <thead>
        <tr class="headings">
            <th class="column-title">Product Image</th>
            <th class="column-title">Product Id</th>
            <th class="column-title">Product Name</th>
            <th class="column-title">Category Name</th>
            <th class="column-title">Product Price</th>
            <th class="column-title">Product Quantity</th>
            <th class="column-title">Publication Status</th>
            <th class="column-title">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr> 
            
            <td>     <img src='{{asset($product->productImage)}}' width="150px" height="150px" " class="img-responsive">
</td>
            <td>{{$product->id }}</th>
            <td>{{$product->productName }}</td>
            <td>{{ $product->catagoryName }}</td>
            <td>TK. {{ $product->productPrice }}</td>
            <td> {{ $product->productQuantity }}</td>
            <td>{{ $product->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td> 
            <td>
                <a href="{{ url('/product/view/'.$product->id) }}" class="btn btn-info" title="Product View">
                    <span class="glyphicon glyphicon-info-sign"></span>
                </a>
                <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-success" title="Product Edit">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
                <a href="{{ url('/product/delete/'.$product->id) }}" title="Product Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                    <span class="glyphicon glyphicon-trash"></span>
                </a>
            </td> 
        </tr>
        @endforeach
    </tbody>
                      </table>
                        <div class="text-center">{{$products->links()}}</div>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

