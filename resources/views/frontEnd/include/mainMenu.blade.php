<div class="navigation agiletop-nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header w3l_logo">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>  
                <h1><a href="{{url('/')}}">
                        <img src="{{asset($icon->logoImage)}}" class="img-responsive">
              </a></h1>
            </div> 
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}" class=""></a></li>	
                     <li><a href="{{url('/')}}">Home</a></li> 

                    <!-- Mega Menu -->
<!--                    <li class="dropdown">
                        <a href="{{url('/products-type/menu')}}" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                  
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                       
                       
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>Food type</h6>  
                                        <li><a href="{{url('/products-type/menu')}}">Breakfast</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">Lunch</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">Dinner</a></li> 
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>Cuisine</h6> 
                                        <li><a href="{{url('/products-type/menu')}}">Indian Recipes</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">American Recipes</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">French Recipes</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">Italian Recipes</a></li> 
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>Box type</h6> 
                                        <li><a href="{{url('/products-type/menu')}}">Diet</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">Mini</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">Regular</a></li> 
                                        <li><a href="{{url('/products-type/menu')}}">Special</a></li> 
                                    </ul>
                                </div> 
                                <div class="clearfix"></div>
                                              <div class="col-sm-12">
                                    <ul class="multi-column-dropdown">
                                        <a href="{{url('/products-menu')}}"> <h6>All Menu</h6></a> 
                                    </ul>
                       </div>
                            </div>
                        </ul>
                    </li>-->
                    <li><a href="{{url('/products-menu')}}">Menu</a></li> 
                    <li><a href="{{url('/about')}}">About</a></li> 
              
                    <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="cart cart box_1"> 
                <form action="#" method="post" class="last"> 
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </form>   
            </div> 
        </nav>
    </div>
</div>