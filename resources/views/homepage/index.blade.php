@extends('homepage.layout.main')
@section('title')
	Desa Limumir Official Website
@endsection
@section('header')
	<div class="row">
		<div class="col-lg justify-content-center text-center">
			<h2>Selamat Datang Di desa Rjasari </h2><br><br>
			<img class="logo-desa" src="/img/logo.png" alt=""> <br><br>
			<p>selamat datang didesa Arjasari yang memiliki slogan gemah ripah repeh rapih</p>
		</div>
	</div><br><br><br>

@endsection

@section('content')

			{{-- Artikel --}}
	<h3><i class="fas fa-newspaper"></i> Artikel Terkini</h3>
	<hr>
	<div class="row">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		  	@foreach ($data as $da)
			    <div class="carousel-item 
			    @php
			    	if ($da->id === $data[0]->id )
			    		echo ('active')
			    	
			    @endphp ">
			      <div class="component">
				      <div class="card">
				        <div class="card-header">
				          <img class="card-img" src="../uploads/image/{{$da->image}}" onerror="this.src='https://static.republika.co.id/uploads/images/inpicture_slide/warga-melintas-di-jalan-desa-yang-membelah-persawahan-_180717110024-320.jpg'" alt="dog">
				        </div>
				        <div class="card-body">
				          <span class="badge badge-secondary">{{$da->kategori}}</span>
				          <h4 class="card-title mt-2">{{$da->title}}</h4>
				          <p class="card-text">{!! Str::limit($da->content , 250 , '...')!!} </p>
				        </div>
				        <div class="card-footer">
				          <a href="/artikel/{{$da->slug}}" class="btn btn-outline-primary">selengkapnya</a>
				        </div>
				      </div>
				    </div>
			    </div>
		  	@endforeach
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div><br><br>

@endsection

