<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('customer/register') }}" role="button"> {{ __('New customer') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('customer List') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 id
 </th>
<th>
 firstname
 </th>
<th>
 lastname
 </th>
 <th>
house_No
</th>
 <th>
 sex
 </th>
 <th>
 phoneNo
 </th>
<th>
 bank_account
 </th>
 </tr>
 </thead>
 <tbody>
 @foreach($customers as $customer)
 <tr>
 <td> {{ $customer->id }}</td>
 <td> {{ $customer->firstname }}</td>
 <td> {{ $customer->lastname }}</td>
 <td> {{ $customer->house_No}}</td>
 <td> {{ $customer->sex}}</td>
 <td> {{ $customer->phoneNo }}</td>
 <td> {{ $customer->bank_account}}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/customer/search/{{ $customer->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/customer/edit/{{$customer->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/customer/delete/{{ $customer->id }}">Delete</a>
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