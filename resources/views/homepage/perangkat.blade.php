@extends('homepage.layout.main')
@section('title')
	Perangkat Desa
@endsection
@section('content')
	<h3><i class="fas fa-user-tie" ></i> Perangkat Desa</h3><hr>
	
	<div class="row">
		<div class="card mb-3" style="width: 100%;">
		  <div class="row no-gutters">
		    <div class="col-md-4">
		      <img class="card-img rounded-circle text-center kades" src="../assets/img/arip.png" class="card-img" alt="...">
		    </div>
		    <div class="col-md-8">
		      <div class="card-body kades-text">
		      	<br>
		        <h5 class="card-title">Wawan Somantri</h5>
		        <p class="card-text">Lahir di pangkuan ibu pada hari kelahirannya. biasa dijuluki 'lord' </p>
		        <p class="card-text text-muted">Kepala Desa</p>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header text-center">
		      		<img class="card-img rounded-circle" style="height: 150px; width: 150px;" src="https://www.shareicon.net/data/512x512/2016/07/26/802007_man_512x512.png" class="card-img" alt="...">					
				</div>
				<div class="card-body text-center">
					<h5 class="card-text">M Dzikri</h5>
					<p class="card-text">magang</p>
					<p class="card-text text-muted">Babu Desa</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header text-center">
		      		<img class="card-img rounded-circle" style="height: 150px; width: 150px;" src="../assets/img/man.png" class="card-img" alt="...">					
				</div>
				<div class="card-body text-center">
					<h5 class="card-text">Dimas </h5>
					<p class="card-text">Tidak ada desa yang aman</p>
					<p class="card-text text-muted">defender Desa</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-header text-center">
		      		<img class="card-img rounded-circle" style="height: 150px; width: 150px;" src="../assets/img/aueu.png" class="card-img" alt="...">					
				</div>
				<div class="card-body text-center">
					<h5 class="card-text">Rizki Lutfhi</h5>
					<p class="card-text">Loli Is The Best</p>
					<p class="card-text text-muted">Hode Desa</p>
				</div>
			</div><br>
		</div>
	</div>
@endsection