@extends('homepage.layout.main')
@section('title')
	Lokasi Desa
@endsection
@section('content')
	<h3><i class="fas fa-map-marked-alt" ></i> Lokasi Desa</h3>
	<hr>
	
	<div class="component">
		<div class="card">
			<div class="card-header">
	 			<div id = "map" ></div>
				
			</div>
			<div class="card-body">
				<p>Alamat kantor desa : Jl.Arjasari , Pinggirsari , Kab.Bandung </p>
			</div>
		</div>
		
	</div>
      <script>
         // Creating map options
         var mapOptions = {
            center: [-6.914744, 107.609810],
            zoom: 12
         }
         
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);
      </script>
@endsection