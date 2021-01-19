@extends('admin.app')

@section('content')
	
	@if(session()->has('message'))
    <div class="alert alert-success bg-dark2 alert-dismissible" role="alert">
        {{ session()->get('message') }}
    	<a href="#" class="pull-right" data-dismiss="alert" aria-label="close"><i class="fas fa-window-close"></i></a>
    </div>
	@endif
	<div class="row">
		
		<div class="col-sm-6 col-md">
			<div class="card card-stats card-info card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-interface-6"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Jumlah Artikel</p>
								<h4 class="card-title">{{$count_post}}</h4>
							</div>
						</div>
					</div>
				</div>
				<a class="btn btn-default " href="/dashboard/artikel/all">
						 <i class="fa fa-book-open"></i> Lihat
				</a>	
			</div>
		</div>
		<div class="col-sm-6 col-md">
			<div class="card card-stats card-success card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-web-1"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Kategori</p>
								<h4 class="card-title">{{$count_cat}}</h4>
							</div>
						</div>
					</div>
				</div>
				<a  class="btn btn-default " href="{{ route('kategori_all') }}">
						 <i class="fa fa-book-open"></i> Lihat
				</a>	
			</div>
		</div>
	</div>
	<br>
	<h4 class="card-title">Latest Post</h4><hr>
	{{-- <div class="row">
		<div class="col-md-6">
			<div class="card card-post card-round">
				<img class="card-img" src="../uploads/image/{{$post[0]->image}}" onerror="this.src='{{asset('assets/img/home.png')}}'"alt="Card image cap">
				<div class="card-body">
					<div class="d-flex">
						<div class="avatar">
							<img src="../assets/img/arip.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info-post ml-2">
							<p class="username">Arip Wibuwo</p>
							<p class="date text-muted">20 Jan 18</p>
						</div>
					</div>
					<div class="separator-solid"></div>
					<p class="card-category text-info mb-1"><a href="#">{{$post[0]->kategori}}</a></p>
					<h3 class="card-title">
						<a href="#">
							{{$post[0]->title}}
						</a>
					</h3>
					<p class="card-text">{!!Str::limit($post[0]->content , 100 , '...')!!}</p>
					<a href="/artikel/{{$post[0]->slug}}" class="btn btn-primary btn-rounded btn-sm">Baca Selengkapnya </a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card card-post card-round">
				<img class="card-img" src="../assets/img/home.png" alt="Card image cap">
				<div class="card-body">
					<div class="d-flex">
						<div class="avatar">
							<img src="../assets/img/arip.png" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info-post ml-2">
							<p class="username">Arip Wibuwo</p>
							<p class="date text-muted">20 Jan 18</p>
						</div>
					</div>
					<div class="separator-solid"></div>
					<p class="card-category text-info mb-1"><a href="#">{{$post[1]->kategori}}</a></p>
					<h3 class="card-title">
						<a href="#">
							{{$post[1]->title}}
						</a>
					</h3>
					<p class="card-text">{!!Str::limit($post[1]->content , 100 , '...')!!}</p>
					<a href="/artikel/{{$post[1]->slug}}" class="btn btn-primary btn-rounded btn-sm">Baca Selengkapnya </a>
				</div>
			</div>
		</div>
		
	</div> --}}
@endsection