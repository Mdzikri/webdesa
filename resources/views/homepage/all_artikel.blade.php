@extends('homepage.layout.main')
@section('title')
	All Artikel
@endsection
@section('content')

	<h3><i class="fas fa-newspaper"></i>  Semua Artikel</h3>
	<hr>
	@foreach ($data as $da)
		<div class="row">
			<div class="component">
				<div class="card">
					<div class="card-header">
						<img class="card-img " src="../uploads/image/{{$da->image}}" onerror="this.src='{{asset('assets/img/home.png')}}'" alt="">
						<br><br> 
						<h3>{{$da->title}}</h3>
						<span class="badge badge-pill badge-success">{{$da->kategori}}</span>
						<span class="badge badge-secondary">Posted : {{ $da->created_at->format('Y-m-d') }}</span><br>
						<br>
						<p>{!!Str::limit($da->content , 150 , '...')!!}</p>
					</div>
					
				</div>
			</div>
			
		</div>
	@endforeach
	<br>
	<div class="pull-right text-right">
		{{$data->render()}}
	</div>
@endsection