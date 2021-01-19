<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="../assets/css/lazy.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/a/ad/Kemendes_Logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>  
    <title>@yield('title')</title>

  </head>
  <body>
    <!-- your content here -->

    @include('homepage.layout.navbar')
    @include('homepage.layout.jumbotron')
    <div class="container">
        @yield('header')
        <div class="row">
            <div class="col-lg-8">
                @yield('content')
                
            </div>
            <div class="col-lg">
                @include('homepage.layout.sidebar')
            </div>
        </div>
        @yield('content2')
    </div>
    @include('homepage.layout.footer')






    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/popper/popper.min.js"></script>
    <script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js" ></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!-- optional plugins -->
    <script type="text/javascript" src="../assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script type="text/javascript" src="../assets/js/lazy.js"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: ['Anak', 'Dewasa', 'Lansia', ],
            datasets: [{
                label: 'Penduduk',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [245, 130, 60,]
            }]
        },

        // Configuration options go here
        options: {}
    });
    
       
    
</script>
  </body>
</html>
