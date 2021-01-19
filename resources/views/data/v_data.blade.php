@extends('admin.data')

@section('content')

	
<div class="content">
    <div class="card card-info card-outline">
      <div class="card-header">
        <div class="card-tools">
          <a href="{{route('c_data')}}" class="btn btn-succses bg-dark">tambah Data <i class="fas fa-plus-square"></i></a>
        </div>
      </div>

      
      <table class="table">
        <thead class="table-dark data">
          <tr>
            <th scope="col">NO</th>
            <th scope="col"> Nama </th>
            <th scope="col"> N I K </th>
            <th scope="col"> Alamat </th>
            <th scope="col"> Dusun </th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @php
                $no=1;
            @endphp

          @foreach ($data as $item)
          <tr>
            <td>{{$no++}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->nik}}</td>
            <td>{{$item->alamat}}</td>
            <td>{{$item->dusun}}</td>
            <td><a href="{{url('u_data',$item->id)}}" class="btn btn-succses bg-primary"><i class="fas fa-user-edit bg-danger"></i> </a>
              <a href="{{url('delete_data',$item->id)}}" class="btn btn-dark bg-danger"><i class="fas fa-trash-alt"></i> </a> </td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
      
      
     

    </div>
  </div>
@endsection