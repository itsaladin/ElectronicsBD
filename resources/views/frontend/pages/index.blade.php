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
                <h3>Featured Products</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}" alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}" alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                        </div>

                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}" alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}"  alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}"  alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}" alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'product2.png') }}" alt="Card image" >
                            <div class="card-body">
                                <h4 class="card-title">Samsung</h4>
                                <p class="card-text">Taka - 5000</p>
                                <a href="#" class="btn btn-outline-warning">Add to cart</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- End SideBar + Content Part -->
 @endsection