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

                    <form action="{{route('newcoupon2')}}" method="post" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" placeholder="Enter Category Name" class="form-control" id="name" type="text" required>
                        <label for="code">Code</label>
                        <input type="text" name="code" class="form-control" id="code" required>

                        <label for="status"> type</label>
                        <input type="text" name="type" class="form-control" id="status" required>

                        <label for="value"> Value</label>
                        <input type="string" name="value" class="form-control" required>

                        <label for="description"> Description</label>
                        <textarea type="string" name="description" class="form-control"></textarea>
                       

                    </div>
 <button type="submit" class="btn btn-primary">Save</button>                        
                    </form>




                </div>

            
@endsection