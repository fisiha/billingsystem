@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('customer  Edit') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('customer/register') }}"
>
@csrf
 <div class="form-group row">
 <label for="id" class="col-md-4 col-formlabel text-md-right">{{ __('id') }}</label>
 <div class="col-md-6">
 <input id="id" type="text" class="formcontrol @error('id') isinvalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="
id" autofocus>
 @error('id')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
@csrf
 <div class="form-group row">
 <label for="name" class="col-md-4 col-formlabel text-md-right">{{ __('firstname') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="formcontrol @error('name') isinvalid @enderror" name="firstname" value="{{ old('name') }}" required autocomplete="
name" autofocus>
 @error('firstname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="name" class="col-md-4 col-formlabel text-md-right">{{ __('lasttname') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="formcontrol @error('name') isinvalid @enderror" name="lastname" value="{{ old('name') }}" required autocomplete="
name" autofocus>
 @error('lastname')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 
 @csrf
 <div class="form-group row">
 <label for="id" class="col-md-4 col-formlabel text-md-right">{{ __('house_No') }}</label>
 <div class="col-md-6">
 <input id="id" type="text" class="formcontrol @error('id') isinvalid @enderror" name="house_No" value="{{ old('id') }}" required autocomplete="
id" autofocus>
 @error('house_No')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="unit" class="col-md-4 col-formlabel text-md-right">{{ __('sex') }}</label>
 <div class="col-md-6">
 <input id="unit" type="text" class="formcontrol @error('unit') isinvalid @enderror" name="sex" value="{{ old('unit') }}" required autocomplete
="unit">
 @error('sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="price" class="col-md-4 col-formlabel text-md-right">{{ __('phoneNo') }}</label>
 <div class="col-md-6">
 <input id="price" type="text" class="formcontrol @error('price') isinvalid @enderror" name="phoneNo" value="{{ old('price') }}" required autocomplete
="price">
 @error('phoneNo')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="quantity" class="col-md-4 col-formlabel text-md-right">{{ __('bank_account') }}</label>
 <div class="col-md-6">
 <input id="quantity" type="text" class="formcontrol @error('quantity') isinvalid @enderror" name="bank_account" value="{{ old('quantity') }}" required autocomplete
="quantity">
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
 {{ __('edit') }}
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