@extends('backend.layouts.master')
@section('content')
  
<div class="main-panel">
  <div class="content-wrapper">
       <div class="card">
           <div class="card-header">
                Manage Product
           </div>
           <div class="card-body">
                @include('backend.partials.messages')
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>#</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>#</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>
                            <a href="{{ route('admin.product.edit',$product->id )}}" class="btn btn-success">Edit</a>
                            <a data-target="#deleteModal{{ $product->id }}" class="btn btn-danger" data-toggle="modal">Delete</a>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you want to delete this item ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{!! route('admin.product.delete', $product->id) !!}" method="post">
                                                {{ csrf_field() }}
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                </table>
           </div>
       </div>
  </div>
  <!-- content-wrapper ends -->

</div>
<!-- main-panel ends -->
@endsection