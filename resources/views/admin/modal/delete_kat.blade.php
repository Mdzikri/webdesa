<div class="modal fade  " name="delete_kategori" id="delete_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered  " style="color: #1b2136 !important;" role="document">
		<div class="modal-content" style=" background-color: #1b2136 !important;" >
			<div class="modal-header">
				<h5 class="modal-title text-white" id="exampleModalLongTitle">Hapus Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<form id="delete_form" action=" " method="POST">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<div class="modal-body">
				<div class="row">
					<div class="col-lg">
						<div class="card">
							<div class="card-header">
								<h3 class="text-white text-center">YAKIN AKAN MENGHAPUS DATA ? <br> <small class="text-danger" >DATA AKAN HILANG PERMANEN</small></h3>
							</div>
							
						</div>						
					</div>
					
				</div>
									
						
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-danger"><span class="btn-label"><i class="fa fa-location-arrow"></i>
				</span>Hapus</button>
			</div>
		</form>
		</div>
	</div>
</div>

<script>
	
</script>