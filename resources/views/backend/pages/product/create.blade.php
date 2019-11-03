@extends('backend.layouts.master')
@section('content')
  
<div class="main-panel">
  <div class="content-wrapper">
       <div class="card">
           <div class="card-header">
                Add Product
           </div>
           <div class="card-body">
           <form action="{{ route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                @include('backend.partials.messages')

                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea name="description" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
        
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="number" class="form-control" name="price" id="exampleInputEmail1" >
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" class="form-control" name="quantity" id="exampleInputEmail1" >
                </div>

                <div class="form-group">
                    <label for="ProductImage">Product Image</label>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="file" class="form-control" name="product_image[]" id="ProductImage" >
                        </div>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" name="product_image[]" id="ProductImage" >
                        </div>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" name="product_image[]" id="ProductImage" >
                        </div>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" name="product_image[]" id="ProductImage" >
                        </div>
                        <div class="col-lg-4">
                            <input type="file" class="form-control" name="product_image[]" id="ProductImage" >
                        </div>
                    </div> 
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
           </div>
       </div>
  </div>
  <!-- content-wrapper ends -->

</div>
<!-- main-panel ends -->
@endsection