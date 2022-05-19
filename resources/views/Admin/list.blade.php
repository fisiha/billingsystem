<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Admin List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
<th>
 username
 </th>
<th>
 password
 </th>
 </tr>
 </thead>
 <tbody>
 @foreach($Admin as $Admin)
 <tr>
 <td> {{ $Admin->username }}</td>
 <td> {{ $Admin->password }}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/Admin/search/{{ $Admin->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/Admin/edit/{{$Admin->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/Admin/delete/{{ $Admin->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection