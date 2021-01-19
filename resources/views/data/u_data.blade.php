@extends('admin.data')

@section('content')
	

<div class="content">
    <div class="card card-info card-outline">
  
      <div class="card-body">
          <form action="{{url('update_data',$update->id)}}" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                  <input type="text" id="nama" name="nama" class="form-control" value="{{$update->nama}}">
              </div>
              <div class="form-group">
                  <input type="text" id="nip" name="nik" class="form-control" value="{{$update->nik}}">
              </div>
              <div class="form-group">
                  <input type="text" id="jurusan" name="Alamat" class="form-control" value="{{$update->alamat}}">
              </div>
              <div class="form-group">
                <input type="text" id="kelas" name="Dusun" class="form-control" value="{{$update->dusun}}">
            </div>
            </div>
              <div class="form-group">
                <center><button type="submit" class="btn btn-success"> ubah Data</button></center>
            </div>
          </form>
      </div>
     

    </div>
  </div>
@endsection