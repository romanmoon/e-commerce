@extends('admin.parts.master')
@section('content')
<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Category Information</h1>
@if($errors->any())
<div class="alert alert-danger">
 <ul>
   @foreach($errors->all() as $error)
   <li>{{$errors}}</li>
   @endforeach
 </ul>
</div>
@endif
<!-- Modal -->
                <div class="modal-body">

                    <form action="{{route('updatecategory', $category->id)}}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Category Name:</label>
                        <input name="name" required placeholder="Enter Category Name" class="form-control" id="name" type="text" value="{{$category->name}}">
                        <label for="discount">Discount</label>
                        <input type="text" name="discount" class="form-control" id="discount"  value="{{$category->discount}}" required>

                        <label for="status"> Status</label>
                        <select name="status" id="status" class="form-control" value="{{$category->status}}">
                            <option value="active">Active</option>
                            <option value="block">Block</option>
             
                         </select>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>




                </div>

            
@endsection