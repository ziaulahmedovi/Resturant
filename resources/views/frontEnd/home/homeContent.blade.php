@extends('frontEnd.master')

@section('title')
Restaurant::Home
@endsection
@section('search')
  <div class="agileits_search">
                        <form action="#" method="post">
                            <input name="Search" type="text" placeholder="Enter Your Area Name" required="">
                            <select id="agileinfo_search" name="agileinfo_search" required="">
                                <option value="">Popular Cities</option>
                                <option value="navs">New York</option>
                                <option value="quotes">Los Angeles</option>
                                <option value="videos">Chicago</option>
                                <option value="news">Phoenix</option>
                                <option value="notices">Fort Worth</option>
                                <option value="all">Other</option>
                            </select>
                            <input type="submit" value="Search">
                        </form>
                    </div> 
@endsection
@section('mainContent')

	       <!-- add-products -->
         <!-- add-products -->
        <div class="add-products">  
            <div class="container">
                <div class="add-products-row">
                    <div class="w3ls-add-grids">
                        <a href="{{url('/products-type/menu')}}"> 
                            <h4>Get <span>20%<br>Cashback</span></h4>
                            <h5>Ordered in mobile app only </h5>
                            <h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                        </a>
                    </div>
                    <div class="w3ls-add-grids w3ls-add-grids-right">
                        <a href="{{url('/products-type/menu')}}"> 
                            <h4>GET Upto<span><br>40% Offer</span></h4>
                            <h5>Sunday special discount</h5>
                            <h6>Order Now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
                        </a>
                    </div> 
                    <div class="clearfix"> </div> 
                </div>  	 
            </div>
        </div>
        <!-- //add-products --> 
        <!-- order -->   	
        <div class="wthree-order">  
            <img src="{{asset('public/frontEnd/')}}//images/i2.jpg" class="w3order-img" alt=""/>
            <div class="container">
                <h3 class="w3ls-title">How To Order Online Food</h3>
                <p class="w3lsorder-text">Get your favourite food in 4 simple steps.</p>
                <div class="order-agileinfo">  
                    <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                        <div class="order-w3text"> 
                            <i class="fa fa-map" aria-hidden="true"></i> 
                            <h5>Search Area</h5>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                        <div class="order-w3text"> 
                            <i class="fa fa-cutlery" aria-hidden="true"></i> 
                            <h5>Choose Food</h5>
                            <span>2</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                        <div class="order-w3text"> 
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <h5>Pay Money</h5>
                            <span>3</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
                        <div class="order-w3text"> 
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <h5>Enjoy Food</h5>
                            <span>4</span>
                        </div>
                    </div>
                    <div class="clearfix"> </div> 
                </div>
            </div>
        </div>
        <!-- //order -->    
        <!-- deals -->
        <div class="w3agile-deals">
            <div class="container">
                <h3 class="w3ls-title">Special Services</h3>
                <div class="dealsrow">
                    <div class="col-md-6 col-sm-6 deals-grids">
                        <div class="deals-left">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div> 
                        <div class="deals-right">
                            <h4>FREE DELIVERY</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="col-md-6 col-sm-6 deals-grids">
                        <div class="deals-left">
                            <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                        </div> 
                        <div class="deals-right">
                            <h4>Party Orders</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-6 col-sm-6 deals-grids">
                        <div class="deals-left">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div> 
                        <div class="deals-right">
                            <h4>Team up Scheme</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="col-md-6 col-sm-6 deals-grids">
                        <div class="deals-left">
                            <i class="fa fa-building" aria-hidden="true"></i>
                        </div> 
                        <div class="deals-right">
                            <h4>corporate orders</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //deals --> 
        <!-- dishes -->
        
        <!-- //dishes -->  
@endsection