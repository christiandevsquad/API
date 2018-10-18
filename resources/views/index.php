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
  </head>

  <body>

    <div class="container" style="margin-top:30px">

      <nav class="navbar navbar-expand-sm navbar-light justify-content-end">
        <a class="navbar-brand" href="#">
          <img src="images/vintage.png" alt="">
        </a>
        <a class="navbar-brand ml-auto" href="#">
          <img src="images/avatar.png" height="30" alt="logo">
        </a>
        <button type="button" class="btn btn-primary-outline" style="color: #000; background-color:white">SIGN OUT</button>
      </nav>

      <div class="row" style="padding-top:30px;">
        <div class="col-3">
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

        <div class="col-9">
          <nav class="navbar-nav mr-auto mt-2 mt-lg-0">
            <form class="form-inline my-2 my-lg-0" action="#">
              <button class="btn btn-primary mr-sm-2">ADD PRODUCT</button>
              <button class="btn btn-primary mr-sm-2">EDIT PRODUCT</button>
              <input class="form-control mr-sm-2" type="text", placeholder="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </nav>

          <table class="table" style="margin-top:20px;">
            <thread>
            <tr>
              <th class="text-center">Product name</th>
              <th class="text-center">Product subname</th>
              <th class="text-center">Price</th>
              <th class="text-center">Actions</th>
            </tr>
            </thread>
          </table>
        </div>
      </div>
    </div>

    <footer class="page-footer font-small blue">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
        2018 Vintage - All rights reserved.
      </div>
      <!-- Copyright -->

    </footer>
  </body>
</html>

