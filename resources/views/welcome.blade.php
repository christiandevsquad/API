<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vintage Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    .vintage{
      padding-top: 250px;
    }

    .btn-group-vertical > button{
        margin-bottom:10px;
    }
    </style>
  </head>

  <body>
    <div class="container">
      <div class="row justify-content-center" style="margin-top:200px;">
        <div class="card text-center" style="width: 40rem;">
          <img class="card-img-top" src="images/vintage_m.png" alt="Card image cap">
          <div class="card-body">
            <form action="/action_page.php">
              <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" placeholder="Email" id="email">
              </div>

              <div class="form-group">
                <label for="pwd"></label>
                <input type="password" class="form-control" placeholder="Password" id="pwd">
              </div>

              <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">SIGN IN</a>
                <button type="button" class="btn btn-outline-primary">SIGN UP</a>
              </div>
          </div>
        </div>
      </div>
    </div>

  <footer class="page-footer">
  <!-- Copyright -->
  <div class="footer-copyright text-center">
    2018 Vintage - All rights reserved.
  </div>
  <!-- Copyright -->

  </footer>

  </body>
</html>
