@extends('frontEnd.master')

@section('title')
Restaurant::Menu
@endsection

@section('search')

@endsection
@section('mainContent')


	<!-- breadcrumb -->  
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Menu</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- menu list -->   	
	<div class="wthree-menu">  
		<img src="{{asset('public/frontEnd/')}}//images/i2.jpg" class="w3order-img" alt=""/>
		<div class="container">
			<h3 class="w3ls-title">Menu</h3>
			<p class="w3lsorder-text">Here your Staple Food Varieties</p>
			<div class="menu-agileinfo">  
                            @foreach($menu as $menu)
				<div class="col-md-4 col-sm-4 col-xs-6 menu-w3lsgrids"> 
					<a href="{{url('/products-type/menu/'.$menu->id)}}"> {{$menu->catagoryName}}</a>
				</div> 
                            @endforeach
				<div class="clearfix"> </div> 
			
	<!-- //add-products --> 


@endsection
