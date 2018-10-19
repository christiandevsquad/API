<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vintage product stock</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
    .fakeimg {
    height: 200px;
    background: #aaa;
    }

    .sidenav{
      font-family: "Courier New", Courier, monospace;
      width: 100px;
    }

		.navbar {
				-webkit-box-shadow: 0 8px 6px -6px #999;
				-moz-box-shadow: 0 8px 6px -6px #999;
				box-shadow: 0 8px 6px -6px #999;
		}

    th{
      color: #808080;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
    }

    li a {
      display: block;
      color: #124;
      padding: 8px 16px;
      text-decoration: none;
    }

    /* Change the link color on hover */
    li a:hover {
      background-color: #555;
      color: white;
    }

    </style>
    @yield('header')
  </head>

  <body>
    <div class="container" style="margin-top:100px">
      <nav class="navbar navbar-expand-sm navbar-light justify-content-end">
        <a class="navbar-brand" href="#">
          <img src="images/vintage.png" alt="">
        </a>
        <a class="navbar-brand ml-auto" href="#">
          <img src="images/avatar.png" height="30" alt="logo">
        </a>
        <button type="button" class="btn btn-primary-outline" style="color: #000; background-color:white">SIGN OUT</button>
      </nav>
      @yield('navbar')
    </div>

    <div class="container" style="background-color: #f2f2f2;">
      <div class="row" style="padding-top:30px;">
        <div class="col-2">
          <ul class="nav nav-pills flex-column sidenav">
            <h4 style="text-align:center">MENU</h4>
            <li class="nav-item">
              <a class="nav-link" href="#">PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ORDERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CUSTOMERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ANALITYCS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DISCOUNTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">APPS</a>
            </li>
          </ul>
          <hr class="d-sm-none">
        </div>

        <div class="col-10">
          @yield('right-side')
        </div>
      </div>
    </div>

    <footer class="page-footer font-small blue">
      <div class="footer-copyright text-center py-3">
        2018 Vintage - All rights reserved.
      </div>
      @yield('footer')
    </footer>
  </body>
</html>
