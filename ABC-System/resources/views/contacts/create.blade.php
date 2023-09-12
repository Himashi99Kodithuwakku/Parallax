@extends('layout')
@section('content')


    <div class="card" style="width:450px ">
        <div class="card-header">Registration</div>
        <div class="card-body">


        <form action ="{{route('register') }}" method="post"  >
        {!! csrf_field() !!}

        <label>Fullname</label>
        <input type="text" name="name" id="name" class="form-control"><br>

        <label>Email</label>
        <input type="email" name="email" id="email" class="form-control"><br>

        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control"><br>

        <input type="submit" value="Submit" class="btn-btn-success">

        </form> 
    </div>

@stop