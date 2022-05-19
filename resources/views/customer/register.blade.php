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
 <div class="card-header">{{ __('CUSTOMER REGSTRATION') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('customer/register') }}"
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
 <div class="form-group row">
 <label for="firstname" class="col-md-4 col-formlabel text-md-right">{{ __('firstname') }}</label>
 <div class="col-md-6">
 <input id="firstname" type="text" class="formcontrol @error('firstname') isinvalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
 @error('firstname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="lastname" class="col-md-4 col-formlabel text-md-right">{{ __('lastname') }}</label>
 <div class="col-md-6">
 <input id="lastname" type="text" class="formcontrol @error('lastname') isinvalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
 @error('lastname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 
 @csrf
 <div class="form-group row">
 <label for="house_No" class="col-md-4 col-formlabel text-md-right">{{ __('house_No') }}</label>
 <div class="col-md-6">
 <input id="house_No" type="text" class="formcontrol @error('house_No') isinvalid @enderror" name="house_No" value="{{ old('house_No') }}" required autocomplete="house_No" autofocus>
 @error('house_No')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="sex" class="col-md-4 col-formlabel text-md-right">{{ __('sex') }}</label>
 <div class="col-md-6">
 <input id="sex" type="text" class="formcontrol @error('sex') isinvalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>
 @error('sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="phoneNo" class="col-md-4 col-formlabel text-md-right">{{ __('phoneNo') }}</label>
 <div class="col-md-6">
 <input id="phoneNo" type="text" class="formcontrol @error('phoneNo') isinvalid @enderror" name="phoneNo" value="{{ old('phoneNo') }}" required autocomplete="phoneNo" autofocus>
 @error('phoneNo')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="bank_account" class="col-md-4 col-formlabel text-md-right">{{ __('bank_account') }}</label>
 <div class="col-md-6">
 <input id="bank_account" type="text" class="formcontrol @error('bank_account') isinvalid @enderror" name="bank_account" value="{{ old('bank_account') }}" required autocomplete="bank_account" autofocus>
 @error('bank_account')
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