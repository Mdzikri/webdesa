@extends('admin.app')

@section('content')
	@include('admin.modal.kat')
	
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
								<i class="flaticon-circle"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Buat Kategori</p>
								
							</div>
						</div>
					</div>
					
				</div>
				
						<button type="button" class="btn btn-default " data-toggle="modal" data-target="#kategori">
						 <i class="fa fa-location-arrow"></i> Tambah
						</button>						
					
			</div>
		</div>
		<div class="col-sm-6 col-md">
			<div class="card card-stats card-danger card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-web-1"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category">Jumlah Kategori</p>
								<h4 class="card-title">{{$count}}</h4>

								
							</div>
						</div>
					</div>
					
				</div>
				
						<button disabled type="button" class="btn btn-default " data-toggle="modal" data-target="#exampleModalCenter">
						 <i class="fa fa-location-arrow"></i> All Categories
						</button>						
					
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg">
			<div style="overflow: auto; height: 305px;">
				
				<table class="table table-striped" >
					<thead>
						<tr>
							
							<th class="text-center" scope="col">Nama Kategori</th>
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col"></th>

							<th class="text-center" scope="col-1">Edit</th>
							<th class="text-center" scope="col-1">Hapus</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($data as $da)
							<tr>
							<td class="text-center">{{$da->name}}</td>
							<td id="{{$da->id}}"></td>
							<td></td>
							<td></td>
							<td class="text-center m-0 p-0">
								<button type="button" onclick="getData({{$da->id}}); getName('{{$da->name}}');" title="" data-toggle="modal" data-target="#edit_kategori" class="btn btn-link btn-simple-primary btn-lg"> <i class="fa fa-edit"></i> </button> 
							</td>

							<td class="text-center">
								<button type="button" onclick="deleteData({{$da->id}});" data-toggle="modal" data-target="#delete_kategori" title="" class="btn btn-link btn-simple-danger" data-original-title="Delete"> <i class="fa fa-times"></i> </button>
							</td>
							</tr>
						@endforeach
						
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script>
		function getData(id)
		{
			document.getElementByID("edit_form").setAttribute("action" , "/artikel/kategori/" + id + "/edit");
			
		}
		function deleteData(id)
		{
			document.getElementById("delete_form").setAttribute("action" , "/artikel/kategori/" + id + "/delete");
			
		}
		function getName(name)
		{
			//document.getElementsByTagName("form")[2].setAttribute("action" , "/artikel/kategori/" + id + "/edit");
		   
		   
		   var data = document.getElementById("edit_kategories");
		   data.setAttribute("placeholder" , "" + name);


		}
	</script>

@endsection