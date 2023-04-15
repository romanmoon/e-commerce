<a href="{{route('home')}}"><button class="btn btn-danger" style="margin: 20px; color:black; font-size:20px; background-color: #F6F6F6;text-align:right;" > Home</button></a>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Invoice</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <!-- <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p> -->
                    </div>
                </div>
            </div>
        </div>
        

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Order No: {{$order->order_number}}</h2>
                    <!-- <p class="sub-heading">Coustomer gmail: {{Auth::user()->gmail}} </p> -->
                    
                </div>
                
                <!-- <div class="col-6">
                    <p class="sub-heading">Full Name:  </p>
                    <p class="sub-heading">Address:  </p>
                    <p class="sub-heading">Phone Number:  </p>
                    <p class="sub-heading">City,State,Pincode:  </p>
                </div> -->
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <tr>
                       
                    <th scope="col">Item</th>
        <th scope="col">Quantity </th>
        <th scope="col">Price</th>
                    
                    </tr>
                </thead>
                <tbody>
                @foreach(App\Models\OrderItem::where('order_id',$order->id)->get() as $key=>$single_data)
                    <tr>
                    <td>{{$single_data->item()->name}}</td>
                    
                    <td>{{$single_data->quantity}}</td>
                    <td>{{$single_data->price*$single_data->quantity}}</td>
                        
                        
                    </tr>
                    @endforeach
                   
                   
                   
                </tbody>
            </table>
            <br>
            <!-- <h3 class="heading">Payment Status: Paid</h3>
            <h3 class="heading">Payment Mode: Cash on Delivery</h3> -->
        </div>

        <!-- <div class="body-section">
            <p>&copy; Copyright 2021 - Fabcart. All rights reserved. 
                <a href="https://www.fundaofwebit.com/" class="float-right">www.fundaofwebit.com</a>
            </p>
        </div>       -->
    </div>      

</body>
</html>
