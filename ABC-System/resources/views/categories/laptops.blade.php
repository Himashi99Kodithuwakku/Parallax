@extends('layout')
@section('title','Laptops')
@section('content')
@include('include.header')

    <div class="container d-flex justify-content-center mt-50 mb-50">
            
        <div class="row">
           <div class="col-md-4 mt-2">
        
                <div class="card">
                     <div class="card-body">

                        <div class="card-img-actions">
                            <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png" class="card-img img-fluid" width="96" height="350" alt="">
                                </div>

                                    </div>

                                    <div class="card-body bg-light text-center">

                                        <div class="mb-2">
                                            <a href="#" class="text-muted" data-abc="true">Laptops & Notebooks</a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">Toshiba Notebook with 500GB HDD & 8GB RAM</h3>
                                        <button type="button" class="btn bg-cart"><a href="{{route('buy') }}"><i class="fa fa-cart-plus mr-2"></i> Add to cart</a></button>
                            </div>
                        </div>
                    </div>
                 </div>

           </div> 

        </div>
    </div>

@stop


