@extends('frontend.layouts.master')

@section('content')

<!-- Start SideBar + Content Part -->
<div class="container margin-top-20">
   <div class="row">
       <div class="col-lg-3">
           @include('frontend.partials.product-sidebar')
       </div>
       <div class="col-lg-9">
           <div class="widget">
               <h3>All Products</h3>
               <div class="row">
                @foreach ($products as $product)
                    
                   <div class="col-lg-4">
                       <div class="card">

                            @php $i = 1; @endphp
                            @foreach ($product->images as $image)
                                @if ($i>0)
                                    <img class="card-img-top feature-img" src="{{ asset('images/products/'. $image->image) }}" alt="Card image" >
                                @endif
                                @php $i--; @endphp
                                
                            @endforeach

                           <div class="card-body">
                               <h4 class="card-title"> {{$product->title}} </h4>
                               <p class="card-text">{{$product->price}}</p>
                               <a href="#" class="btn btn-outline-warning">Add to cart</a>
                           </div>
                       </div>
                   </div>

                @endforeach

               </div>
           </div>
       </div>
   </div>
</div>
<!-- End SideBar + Content Part -->

@endsection