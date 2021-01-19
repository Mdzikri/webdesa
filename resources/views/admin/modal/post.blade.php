<div class="modal fade bd-example-modal-lg " id="post_artikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg " style="color: #1b2136 !important;" role="document">
		<div class="modal-content" style=" background-color: #1b2136 !important;" >
			<div class="modal-header">
				<h5 class="modal-title text-white" id="exampleModalLongTitle">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<form action="{{route('postArtikel')}}" enctype="multipart/form-data" method="POST">
			{{csrf_field()}}
			<div class="modal-body">
				<div class="row">
					<div class="col-lg">
						<div class="card">
							<div class="card-header">
								<h3 class="text-white"><i class="fas fa-pen"></i> Judul</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" name="title" placeholder="Masukan Judul">
								</div>
							</div>
						</div>						
					</div>
					
					
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="card ">
							<div class="card-header">
								<h3 class="text-white"><i class="fas fa-camera-retro" ></i> Thumbnail</h3>						
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="exampleFormControlFile1">Example file input</label>
									<input required type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
								</div>
							</div>
						</div>
						
					</div>
					<div class="col-lg">
						<div class="col-lg">
						<div class="card">
							<div class="card-header">
								<h3 class="text-white"><i class="fas fa-list"></i> Kategori</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<select class="form-control" name="kategori" id="formGroupDefaultSelect">
										<option disabled selected >Pilih kategori</option>
										@foreach ($cat as $c)
											<option value="{{$c->name}}">{{$c->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg">
						<div class="card">
							<div class="card-header">
								<h3 class="text-white"><i class="fas fa-columns"></i> Isi Artikel</h3>
							</div>
							<div class="card-body">
							  <textarea name="content"></textarea>					
							</div>	
							{{-- <button class="btn btn-primary">
								<span class="btn-label">
									<i class="fa fa-location-arrow"></i>
								</span>
								Post
							</button> --}}	               
						</div>											
					</div>
				</div>
					
						
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"><span class="btn-label"><i class="fa fa-location-arrow"></i>
				</span>Post</button>
			</div>
		</form>
		</div>
	</div>
</div>

@include('admin.modal.edit_post')
@include('admin.modal.delete_post')
