@extends('admin.app')

@section('content')
@include('admin.modal.post')
	@if(session()->has('message'))
	    <div class="alert alert-success bg-dark2 alert-dismissible" role="alert">
	        {{ session()->get('message') }}
	    	<a href="#" class="pull-right" data-dismiss="alert" aria-label="close"><i class="fas fa-window-close"></i></a>
	    </div>
	@endif

	<div class="row">
		<div class="col-sm-6 col-md">
			<div class="card card-stats card-primary card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-circle"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Buat Artikel</p>
								
							</div>
						</div>
					</div>
					
				</div>
				
						<button type="button" class="btn btn-default " data-toggle="modal" data-target="#post_artikel">
						 <i class="fa fa-location-arrow"></i> Post Artikel
						</button>						
					
			</div>
		</div>
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
				<button disabled class="btn btn-default " >
						 <i class="fa fa-book-open"></i> All
				</a>	
			</div>
		</div>
	</div>

	<h1 class="card-title text-white" >All Posts</h1><hr>

	<div style="overflow: auto; height: 405px;">
		
		<div class="row">
			@foreach ($data as $da)
				
			<div class="col-md-6">
				<div class="card card-post card-round">
				<img class="card-img" src="../../uploads/image/{{$da->image}}" onerror="this.src='{{asset('assets/img/home.png')}}'" alt="Card image cap">
				<div class="card-body">
					<div class="d-flex">
						<div class="avatar">
							<img src="{{asset('assets/img/arip.png')}}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info-post ml-2">
							<p class="username">Arip Wibuwo</p>
							<p class="date text-muted">20 Jan 18</p>
						</div>
					</div>
					<div class="separator-solid"></div>
					<p class="card-category text-info mb-1"><a href="#">{{$da->kategori}}</a></p>
					<h3 class="card-title">
						<a href="#">
							{{$da->title}}
						</a>
					</h3>
					<p class="card-text">{!!Str::limit($da->content , 100 , '...')!!}</p>
					<button type="button" onclick="deletePost({{$da->id}});" data-toggle="modal" data-target="#delete_artikel" title="" class=" btn btn-link btn-simple-danger btn-lg pull-right" data-original-title="Delete"> <i class="fa fa-times"></i> </button>
					<button type="button" onclick=" getPost({{$da->id}});getContents('{{$da->content}}'); getTitle('{{$da->title}}'); " title="" data-toggle="modal" data-target="#edit_artikel" class="btn btn-link btn-simple-primary pull-right btn-lg"> <i class="fa fa-edit"></i> </button> 
					<a href="/artikel/{{$da->slug}}" class="btn btn-primary btn-rounded btn-sm ">Baca Selengkapnya </a>
				</div>
			</div>
			</div>
			@endforeach
			
		</div>
		
	</div>

	<script>
		CKEDITOR.replace( 'content_edit' );

			
		function getPost(id)
		{
			document.getElementById("edit_post").setAttribute("action" , "/artikel/edit/" + id );

		}

		function getContents(content)
		{
			
			
       		CKEDITOR.instances['content_edit'].setData(content);
            
			
		}
		function getTitle(title)
		{
			
			
			document.getElementById("title_post").setAttribute("value" , "" + title );
       		
            
			
		}
		function deletePost(id)
		{
			document.getElementById("delete_post").setAttribute("action" , "/artikel/delete/" + id);
		}






	</script>

@endsection

