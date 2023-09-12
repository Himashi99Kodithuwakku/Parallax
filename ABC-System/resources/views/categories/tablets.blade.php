@extends('layout')
@section('title','Tablets')
@section('content')
@include('include.header')
<div class="container d-flex justify-content-center mt-50 mb-50">
<div class="container d-flex justify-content-center mt-50 mb-50">
            
            <div class="row">
               <div class="col-md-4 mt-2">
                
                    
                    <div class="card">
                         <div class="card-body">
                            <div class="card-img-actions">
                                <img src="{{ asset('samsung.jpeg') }}" class="card-img img-fluid" width="96" height="350" alt="">
                                    </div>
                                        </div>
    
                                        <div class="card-body bg-light text-center">
                                            <div class="mb-2">
                                                <a href="#" class="text-muted" data-abc="true">Tablets & pens</a>
                                            </div>
    
                                            <h3 class="mb-0 font-weight-semibold">Samsung S6 Lite with 500GB & 8GB RAM</h3>
                                            <button type="button" class="btn bg-cart"><a href="{{route('buy') }}"><i class="fa fa-cart-plus mr-2"></i> Add to cart</a></button>
                                            
                                </div>
                            </div>
                        </div>
                     </div>
    
               </div> 
    
            </div>
        </div>

@stop


