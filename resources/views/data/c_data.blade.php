@extends('admin.app')

@section('content')
	
	
<div class="content">
	<div class="card card-info card-outline">
  
	  <div class="card-body">
		  <form action="{{route('save')}}" method="post">
			{{ csrf_field() }}
			  <div class="form-group">
				  <label for="">N A M A </label>
				  <input type="text" id="nama" autocomplete="off" name="nama" class="form-control" placeholder="Input Nama Warga">
			  </div>
			  <div class="form-group">
				  <label for="">N I K</label>
				  <input type="text" autocomplete="off" id="nip" name="nik" class="form-control" placeholder="Masukan NIK">
			  </div>
			  <div class="form-group">
				  <label for="">A L A M A T</label>
				  <input type="text" id="jurusan" autocomplete="off" name="alamat" class="form-control" placeholder="Alamat">
			  </div>
			  <div class="form-group">
				  <label for="">R T / R W</label>
				<input type="text" autocomplete="off" id="kelas" name="dusun" class="form-control" placeholder="Masukan RT/RW">
			</div>
			</div>
			  <div class="form-group">
			   
				<center><button type="submit" class="btn btn-success"> Simpan Data</button></center>
			</div>
		  </form>
		  <br><br><br>
	  </div>
	 

	</div>
  </div>
@endsection