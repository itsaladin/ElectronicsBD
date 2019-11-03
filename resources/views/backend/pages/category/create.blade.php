@extends('backend.layouts.master')
@section('content')
  
<div class="main-panel">
  <div class="content-wrapper">
       <div class="card">
           <div class="card-header">
                Add Category
           </div>
           <div class="card-body">
           <form action="{{ route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                @include('backend.partials.messages')

                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="form-group">
                    <label for="desciption">Description</label>
                    <textarea name="description" id="desciption" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="desciption">Parent Category</label>
                    <select class="form-control" name="parent_id" id="">
                        @foreach ($main_categories as $category)
                            <option value="{{ $category-> id}}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="Image">Category Image</label>
                    <input type="file" class="form-control" name="image" id="Image" >
                </div>

                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
           </div>
       </div>
  </div>
  <!-- content-wrapper ends -->

</div>
<!-- main-panel ends -->
@endsection