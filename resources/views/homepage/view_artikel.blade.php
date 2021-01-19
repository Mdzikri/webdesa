@extends('homepage.layout.main')
@section('title')
	{{$data->title}}
@endsection
@section('content')

	<h3><i class="fas fa-newspaper"></i>  Artikel Desa</h3>
	<hr>
	
	<div class="component">
		<div class="card">
			<div class="card-header">
				<img class="card-img " src="../uploads/image/{{$data->image}}" onerror="this.src='{{asset('assets/img/home.png')}}'" alt="">
				<br><br> 
				<h3>{{$data->title}}</h3>
				<span class="badge badge-pill badge-success">{{$data->kategori}}</span>
				<span class="badge badge-secondary">Posted : {{ $data->created_at->format('Y-m-d') }}</span><br>
				<br>
				<p>{!!$data->content!!}</p>
			</div>
			
		</div>
	</div>

@endsection