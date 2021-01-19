<div class="modal fade  " name="kategori" id="kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  " style="color: #1b2136 !important;" role="document">
		<div class="modal-content" style=" background-color: #1b2136 !important;" >
			<div class="modal-header">
				<h5 class="modal-title text-white" id="exampleModalLongTitle">Tambah Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<form action="{{route('postKategori')}}" method="POST">
			{{csrf_field()}}
			<div class="modal-body">
				<div class="row">
					<div class="col-lg">
						<div class="card">
							<div class="card-header">
								<h3 class="text-white"><i class="fas fa-pen"></i> Kategori</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Nama Kategori">
								</div>
							</div>
						</div>						
					</div>
					
				</div>
									
						
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary"><span class="btn-label"><i class="fa fa-location-arrow"></i>
				</span>Tambah</button>
			</div>
		</form>
		</div>
	</div>
</div>

	@include('admin.modal.edit_kat')
	@include('admin.modal.delete_kat')

