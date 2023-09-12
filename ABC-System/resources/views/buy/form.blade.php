@extends('layout')
@section('content')
@section('title','Add to Cart')
@include('include.header')

<div class="form-buy">
<form style="width:450px;">
  {!! csrf_field() !!}

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <select class="form-select" aria-label="Default select example">
        <option selected>Category</option>
        <option value="1">Mobiles</option>
        <option value="2">Tablets</option>
        <option value="3">Laptops</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">View</button>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>








</div>








@stop