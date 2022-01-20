<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f3}

th {
  background-color: #04AA6D;
  color: white;
}

 
</style>
</head>
<body>
 <table>
 	<tr><td><b>Name :</b></td><td>{{ $bills->name }}</td></tr>
 	<tr><td><b>Address :</b></td><td>{{ $bills->address }}</td></tr>
 	<tr><td><b>E Mail :</b></td><td>{{ $bills->email }}</td></tr>
 	<tr><td><b>Phone :</b></td><td>{{ $bills->phone }}</td></tr>
 </table>
<h2>Your Total</h2>



   <img src="{{ public_path('image.png') }}" style="width: 100px; height: 100px">
<!-- <img src="assets/img/18-dark-line-art-coreldraw.jpg" style="width: 100px; height: 100px">
 --><table>
  <tr>
    <th style="color:black;">Client</th>
    <th style="color:black;">Category</th>
    <th style="color:black;">Product</th>
    <th style="color:black;">Height</th>
    <th style="color:black;">Width</th>
    <th style="color:black;">Total</th>
    <th style="color:black;">Price</th>
    <th style="color:black;">Grand total</th>
  </tr>
 @foreach($products as $productss) <tr> 
    <td>{{ $productss->client }}</td>
    <td>{{ $productss->category }}</td>
    <td>{{ $productss->product }}</td>
    <td>{{ $productss->quantity }}</td>
    <td>{{ $productss->unit_price }}</td>
    <td>{{ $productss->total }}</td>
    <td>{{ $productss->price }}</td>
    <td>{{ $productss->grandtotal }}</td>

 </tr> @endforeach
 <?php
                           $gtotal = 0;
                           foreach ($products as $cproductes){
                           $gtotal += $cproductes->grandtotal;
                           }
                           $gtotal = 0+$gtotal;
                   ?>
                   <tr>
                       <td colspan="5" class="text-right"><b>Grand Total</b></td>
                       <td> <b>{{$gtotal}}</b></td>
                   </tr> 

</table>
 
                       
</body>
</html>
