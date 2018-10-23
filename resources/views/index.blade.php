@extends('layouts.app')
@section('right-side')

<nav class="navbar navbar-expand-sm navbar-light justify-content-end">
  <a class="navbar-brand" href="{{route('product')}}">
    <button class="btn btn-primary mr-sm-2">ADD PRODUCT</button>
  </a>
  <a class="navbar-brand ml-auto" href="#">
    <button class="btn btn-primary ml-auto">IMPORT PRODUCT</button>
  </a>
    <input class="form-control input-sm mr-sm-2" type="text", placeholder="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
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

@endsection
