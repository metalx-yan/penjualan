
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Floating labels example · Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            @php
            $no = 1;
        @endphp
        <h1>Table Jasa</h1>
      <table class="table table-striped" id="myTable">
              <thead>
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Quantity</th>
              </tr>
              </thead>
              <tbody>
                  @foreach (App\Interior::all() as $interior)                            
                  <tr>
                      <th>{{ $no++ }}</th>
                      <th>{{ $interior->type }}</th>
                      
                      <th>{{ $interior->quantity }}</th>
                      
                  </tr>
              @endforeach
              </tbody>
        </table>
        </div>
        <div class="col-md-6">
            @php
            $no = 1;
        @endphp
        <h1>Table Produk</h1>
      <table class="table table-striped" id="myTables">
              <thead>
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Name</th>
                  <th scope="col">Ukuran</th>
                  <th scope="col">Quantity</th>
              </tr>
              </thead>
              <tbody>
                  @foreach (App\Building::all() as $interior)                            
                  <tr>
                      <th>{{ $no++ }}</th>
                      <th>{{ $interior->name }}</th>
                      <th>{{ $interior->size }}</th>
                      <th>{{ $interior->quantity }}</th>
                      
                      
                  </tr>
              @endforeach
              </tbody>
        </table>
  
        </div>
      </div>
    </div>
      

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
        $(document).ready( function () {
            $("#myTable, #myTables").DataTable({
                "dom": 'lrtip'
            });
        });
    </script>
</body>
</html>
