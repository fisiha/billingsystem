@extends('layouts.app')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('Admin REGSTRATION') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('Admin/register') }}"
><!-- Latest compiled and minified CSS -->

@csrf
 <div class="form-group row">
 <label for="id" class="col-md-4 col-formlabel text-md-right">{{ __('id') }}</label>
 <div class="col-md-6">
 <input id="id" type="text" class="formcontrol @error('id') isinvalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="id" autofocus>
 @error('id')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
@csrf
 <div class="form-group row">
 <label for="username" class="col-md-4 col-formlabel text-md-right">{{ __('username') }}</label>
 <div class="col-md-6">
 <input id="username" type="text" class="formcontrol @error('username') isinvalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
 @error('username')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="password" class="col-md-4 col-formlabel text-md-right">{{ __('password') }}</label>
 <div class="col-md-6">
 <input id="password" type="text" class="formcontrol @error('password') isinvalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
 @error('password')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection