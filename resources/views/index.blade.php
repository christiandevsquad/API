@extends('layouts.app')
@section('right-side')

{{--
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
--}}

<nav class="navbar navbar-expand-sm navbar-light justify-content-end">
  <a class="navbar-brand" href="{{route('product')}}">
    <button class="btn btn-primary mr-sm-2">ADD PRODUCT</button>
  </a>
  <a class="navbar-brand" href="#">
    <button class="btn btn-primary ml-auto">IMPORT PRODUCT</button>
  </a>
    <input class="form-control input-sm mr-sm-2" type="text", placeholder="Search">
    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</nav>

<style>
.td {
text-align: center;
}
</style>

<table class="table" style="margin-top:20px;" id="table">
  <thead>
  <tr>
    <th class="text-center">Name</th>
    <th class="text-center">Subname</th>
    <th class="text-center">Price</th>
    <th class="text-center">Actions</th>
  </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr class="item{{$item->id}}">
      <td>{{$item->name}}</td>
      <td>{{$item->subName}}</td>
      <td>{{$item->price}}</td>
      <td>
        <button class="edit-modal btn btn-info"
        {{-- data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">--}}
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
        {{--data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">--}}
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<script>
  $(document).ready(function() {
    $('#table').DataTable();
  } );
</script>

@endsection
