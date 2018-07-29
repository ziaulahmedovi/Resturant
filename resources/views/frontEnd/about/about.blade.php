@extends('frontEnd.master')

@section('title')
Restaurant::About
@endsection

@section('search')

@endsection
@section('mainContent')



<!-- breadcrumb -->  
<div class="container">	
    <ol class="breadcrumb w3l-crumbs">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
        <li class="active">About</li>
    </ol>
</div>
<!-- //breadcrumb -->
<!--  about-page -->
<div class="about">
    <div class="container"> 
        <h3 class="w3ls-title w3ls-title1">About Us</h3>
        <div class="about-text">	
            <p>
                {{$about->content}}
            </p><div class="ftr-toprow">
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>Fusce tempus</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div> 
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>Consectetur</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div> 
                    <div class="ftr-top-right">
                        <h4>Dolor siet</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                    </div>
                    <div class="clearfix"> </div>
                </div> 
                <div class="clearfix"> </div>
            </div> 
            <div class="clearfix"> </div>
        </div>
        <div class="history">
            <h3 class="w3ls-title">How does it work ?</h3>
            <p>{{$work->content}}</p>
            <h3 class="w3ls-title">Our history</h3>
            <p>{{$history->content}}</p>

        </div>
    </div>
</div>
<!-- //about-page --> 

@endsection
