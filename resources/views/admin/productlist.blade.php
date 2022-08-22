@extends('admin.parts.master')

@section('content')

 
<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Product list</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Category list</th>
        <th scope="col">For</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Viewed</th>
        <th scope="col">Buy</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_products as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->category->name}}</td>
            <td>{{$single_data->for_whom}}</td>
            <td>{{$single_data->price}}</td>
            <td>{{$single_data->stock}}</td>
            <td>{{$single_data->nview}}</td>
            <td>{{$single_data->nbuy}}</td>
            <td>
                <img style="width: 100px;" src="{{url('/uploads/product/'.$single_data->product_image)}}" alt="kodeeo">
            </td>
            <td>
                <a href="{{route('productedit', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-success">View</a>
                <a href="{{route('productdelete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>


</table>
{{$all_products->links()}}
@endsection
