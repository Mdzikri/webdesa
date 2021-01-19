@extends('homepage.layout.main')
@section('title')
	Surat Online
@endsection
@section('content')
<style>
  div.desa-data {
  background-color: lightblue;
  width: 750px;
  height: 780px;
  overflow: scroll;
}
</style>

	<h3><i class="fas fa-envelope" ></i> Data Warga Desa Arjasari </h3><hr>
	<br>

	<div class="row desa-data">
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                  <th scope="col"> NO </th>
                  <th scope="col"> NIK </th>
                  <th scope="col"> Nama </th>
                  <th scope="col"> Alamat</th>
                  <th scope="col"> RT/RW </th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no=1;
                @endphp
                @foreach ($data as $item)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$item->nik}}</td>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->alamat}}</td>
                  <td>{{$item->dusun}}</td>
                  
                </tr>
                @endforeach
                
              </tbody>
          </table>
    </div>
@endsection









