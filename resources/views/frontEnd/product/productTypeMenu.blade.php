@extends('frontEnd.master')

@section('title')
Restaurant::Menu-Type
@endsection

@section('search')

@endsection
@section('mainContent')


<!-- breadcrumb -->  
<div class="container">	
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
        <li class="active">Dishes</li>
    </ol>
</div>
<!-- //breadcrumb -->
<!-- products -->
<div class="products">	 
    <div class="container">
        <div class="col-md-12 product-w3ls-right"> 

            <div class="products-row" >
                @foreach($publishProduct as $data)
                <div class="col-xs-6 col-sm-4 product-grids" style="margin-bottom:40px; " >
                    <div class="flip-container">
                        <div class="flipper agile-products">
                            <div class="front"> 
                                <img src="{{asset($data->productImage)}}" class="img-responsive" alt="img" >
                                <div class="agile-product-text">              
                                    <h5>{{$data->productName}}</h5>  
                                </div> 
                            </div>
                            <div class="back">
                                <h4>{{$data->productName}}</h4>
                                <p>Maecenas condimentum interdum lacus, ac varius nisl.</p>
                                <h6>3<sup>$</sup></h6>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1"> 
                                    <input type="hidden" name="w3ls_item" value="Fish salad"> 
                                    <input type="hidden" name="amount" value="3.00"> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                    <span class="w3-agile-line"> </span>
                                    <a href="#" >More</a>
                                </form>
                            </div>
                        </div>
                    </div> 
                </div> 
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="clearfix"> </div> 
    </div>
</div>
<!-- //products --> 
<div class="container"> 
    <div class="w3agile-deals prds-w3text"> 
        <h5>Vestibulum maximus quam et quam egestas imperdiet. In dignissim auctor viverra.</h5>
    </div>
</div>

               

@endsection