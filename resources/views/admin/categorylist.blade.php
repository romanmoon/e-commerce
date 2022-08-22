@extends('admin.parts.master')

@section('content')

<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Category List</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Discount</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($all_categories as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            
            <td>{{$single_data->name}}</td>
            <td>{{$single_data->discount}}</td>
            <td>{{$single_data->status}}</td>
          
            <td>
                <a href="{{route('categoryeditroute', ['id'=>$single_data->id])}}" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-success">View</a>
                <a href="{{route('categorydelete', ['id'=>$single_data->id])}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
