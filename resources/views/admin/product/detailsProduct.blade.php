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

                      <h2 class="text-info text-center text-capitalize">Product Details</h2>
                      <div class="col-sm-3"><img src='{{asset($product->productImage)}}' width="250px" height="250px"  class="img-responsive" style="margin-bottom: 30px; ">
                          <br>   <a class="" href='{{url('/product/edit/'.$product->id)}}' title="Edit">
                              
                              <button class=" btn btn-success glyphicon glyphicon-edit text-success">&nbsp;Edit</button>

                          </a>
                                <a title="Delete" href='{{url('/product/delete/'.$product->id)}}' 
                                   onclick="return confirm('Are you sure to delete this ?');" >           <button class=" btn btn-danger glyphicon glyphicon-trash">&nbsp;Delete</button>
</a>
                      </div>
                      <div class="col-sm-9">
                          <table class="table table-bordered text-justify table-hover table-bordered">
                              <tr>
                                  <td>
                                     Product Id
                                  </td>
                                  <td>
                                      {{$product->id}}
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      Product Name
                                  </td>
                                  <td>
                                      {{$product->productName}}

                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                     Category Name
                                  </td>
                                  <td>
                                   {{$product->catagoryName}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    Product Price
                                  </td>
                                  <td>
                                   {{$product->productPrice}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                  Product Quantity 
                                  </td>
                                  <td>
                                   {{$product->productQuantity}}   
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                    Publication Status
                                  </td>
             <td>{{ $product->publicationStatus == 1 ? 'Published' : 'Unpublished' }}</td> 

                              </tr>
                                  <tr>
                                  <td>
                                    Product Short Description
                                  </td>
                                  <td>
                                   {{$product->productShortDescription}}   
                                  </td>
                              </tr>
                                  <tr>
                                  <td>
                                    Product Long Description
                                  </td>
                                  <td>
                                   {{$product->productLongDescription}}   
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