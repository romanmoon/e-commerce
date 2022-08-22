@extends('admin.parts.master')

@section('content')

<h1 style="text-align: center; margin-top: 100px auto; background-color: #80ced6; padding: 15px;">Orders</h1>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Item</th>
        <th scope="col">Quantity </th>
        <th scope="col">Price</th>
       
    </tr>
    </thead>
    <tbody>
    @foreach($orderItems as $key=>$single_data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$single_data->item()->name}}</td>
            
            <td>{{$single_data->quantity}}</td>
            <td>{{$single_data->price}}</td>
           
        </tr>
    @endforeach

    
    </tbody>
</table>
<div class="row">
        <div class="col-md-12 text-center">
           @if($order->status=="pending")
           <a href="{{route('orderProcess',$order)}}" class="btn btn-info" onclick="return confirm('Please Confirm')">Process</a>
           @elseif($order->status=="processing")
           <a href="{{route('orderShipped',$order)}}" class="btn btn-info" onclick="return confirm('Please Confirm')">Complete</a>
        @else
        <a href="#" class="btn btn-info" disabled>Completed</a>

           @endif
        </div>
    </div>
@endsection