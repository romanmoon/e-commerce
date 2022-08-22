@extends('admin.parts.master')

@section('content')

<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Category List</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Type</th>
        <th scope="col">Value</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_coupons as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->code}}</td>
            <td>{{$single_data->type}}</td>
            <td>{{$single_data->value}}</td>
            <td>{{$single_data->description}}</td>
          
            <td>
          
                
                <a href="{{route('coupondelete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
