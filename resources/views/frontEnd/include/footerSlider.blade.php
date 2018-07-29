<div class="w3agile-spldishes">
            <div class="container">
                <h3 class="w3ls-title">Special Foods</h3>
                <div class="spldishes-agileinfo">
                    <div class="col-md-3 spldishes-w3left">
                        <h5 class="w3ltitle">Staple Specials</h5>
                        <p>Vero vulputate enim non justo posuere placerat Phasellus mauris vulputate enim non justo enim .</p>
                    </div> 
                    <div class="col-md-9 spldishes-grids">
                        <!-- Owl-Carousel -->
                        <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
                           @foreach($sliderImg as $Img)
                            <a href="products.html" class="item g1">
                                <img class="lazyOwl" src="{{asset($Img->sliderImage)}}" title="Our latest gallery" alt=""/>
                                <div class="agile-dish-caption">
                                    <h4>{{$Img->imageName}}</h4>
                                    <span>{{$Img->imageTitle}} </span>
                                </div>
                            </a>
                           @endforeach
                        </div> 
                    </div>  
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>