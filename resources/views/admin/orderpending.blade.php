@extends('admin.parts.master')

@section('content')

<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Orders</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Order No</th>
        <th scope="col">Customer </th>
        <th scope="col">Address</th>
        <th>Payment Amount</th>
        <th>Payment Status</th>
        <th>Payment Method</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($pendingOrders as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            
            <td>{{$single_data->order_number}}</td>
            <td>{{$single_data->customer()->name}}</td>
            <td>{{$single_data->shipping_address}}</td>
            <td>{{$single_data->grand_total}}</td>
            <td>{{$single_data->is_paid?"Paid":"Pending"}}</td>

            <td>{{$single_data->payment_method}}</td>
            <td>
                <a href="{{route('orderView', $single_data)}}" class="btn btn-warning">View</a>
            
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection