@extends('homepage.layout.main')

@section('title')
	Sejarah Desa
@endsection

@section('content')
	
	
  <div class="container">
	    <h3 class="p-0"> <i class="fas fa-history"></i> Timeline Sejarah Desa</h3>
	    <hr>
	    <!--first section-->
	    <div class="row align-items-center how-it-works d-flex">
	      <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
	        <div class="circle font-weight-bold"></div>
	      </div>
	      <div class="col-6">
	        <h5>2025</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
	      </div>
	    </div>
	    <!--path between 1-2-->
	    <div class="row timeline">
	      <div class="col-2">
	        <div class="corner top-right"></div>
	      </div>
	      <div class="col-8">
	        <hr/>
	      </div>
	      <div class="col-2">
	        <div class="corner left-bottom"></div>
	      </div>
	    </div>
	    <!--second section-->
	    <div class="row align-items-center justify-content-end how-it-works d-flex">
	      <div class="col-6 text-right">
	        <h5>2020</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
	      </div>
	      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
	        <div class="circle font-weight-bold"></div>
	      </div>
	    </div>
	    <!--path between 2-3-->
	    <div class="row timeline">
	      <div class="col-2">
	        <div class="corner right-bottom"></div>
	      </div>
	      <div class="col-8">
	        <hr/>
	      </div>
	      <div class="col-2">
	        <div class="corner top-left"></div>
	      </div>
	    </div>
	    <!--third section-->
	    <div class="row align-items-center how-it-works d-flex">
	      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
	        <div class="circle font-weight-bold"></div>
	      </div>
	      <div class="col-6">
	        <h5>2015</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
	      </div>
	    </div>
	  </div>
	

@endsection