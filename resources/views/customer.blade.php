<!DOCTYPE html>
<html>
<head>
        <title>Customers</title>
</head>
<body>

<?php

   <h1>{{$customer->name}} </h1><br />
    <h2>Orders</h2>

    <ul>
    @foreach($customer->orders as $order)
         <li>{{$order->name}}</li>

    @endforeach
    </ul>
    

</body> 
</html>
