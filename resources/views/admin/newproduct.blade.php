@extends('admin.parts.master')

@section('content')

    <h3>Product create form</h3>

    @if(Session::has('message'))
        <p class="alert alert-success">{{ Session::get('message') }}</p>
    @endif


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif





<div class="modal-body">

                    <form action="{{route('newproduct2')}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Enter Product Name:</label>
                        <input name="name" required placeholder="Enter Product Name" class="form-control" id="name" type="text">
                        <label for="whom">For Whom</label>
                        <select name="whom" id="whom" class="form-control">
                    <option value="man">Man</option>
                    <option value="women">Women</option>
                    <option value="kid">Kid</option>
                    <option value="essential">Essential</option>
                    <option value="accessories">Accessories</option>
                    <option value="all">All</option>

                
            </select>
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" required>

                        <label for="description"> Description</label>
                        <textarea type="string" name="description" class="form-control" id="description" required></textarea>
                    

                    <div class="form-group">
            <label for="p_category">Select Category:</label>
            <select name="product_category" id="p_category" class="form-control">

                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <label for="stock">stock</label>
                        <input type="number" name="stock" class="form-control" id="stock" required>

        <div class="form-group">
            <input name="image" type="file" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
</div>
                    </form>




                


@endsection