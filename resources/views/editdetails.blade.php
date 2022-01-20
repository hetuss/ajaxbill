@extends('layouts.backend.main')
@section('content')





 <div id="right-panel" class="right-panel">

        <!-- Header-->
       
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" style="background-color:  #264d73">
                                <strong class="card-title" style="color: white">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <form  method="POST" action="" enctype="multipart/form-data">
                                     @csrf
                                     
                                <table>
                                    <thead>

                                    <div class="row">
                       
                                         
                                         
                                    </thead>
                                       
                                </table>
                               
                               
                                <table border="1" width="700px">
                                   
                                </table>
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

   


 <!Doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
 
  <!-- make dynamic input field -->
   <div class="col-md-12"> 
    <form  method="POST" enctype="multipart/form-data" action="{{route('update.details')}}">
                                 @csrf 
           <input type="text" name="id" value="{{$products->id}}">            
        <table class="table table-responsive">
          <thead>
            <tr>
              <th>category</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Unit</th>
              <th>Total</th>
             
            </tr>
          </thead>
          <tbody class="row_container">
           
              <tr id="">
              
                         <td><select name="category">
                            @foreach($category as $category)
                             <option value="{{$category->id}}">{{$category->category}}
                                 
                             </option>
                            @endforeach
                         </select></td>
                <td>
                  <input type="text" name="product" class="form-control" placeholder="Product Name">
                </td>        
                <td>
                  <input type="text" name="quantity" class="form-control" placeholder="Quantity" id="quantity">
                </td>        
                <td>
                  <input type="text" name="unit_price" class="form-control" placeholder="Unit Price" id="unitprice">
                </td>
                <td>
                  <input type="text" name="total" class="form-control" placeholder="Total" id="total" style="cursor: pointer;" readonly>
                </td>
               
              </tr>
          </tbody>
          <tbody>
              <tr>
                <td colspan="3"></td>
                <td></td>
                <td></td>
                
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Sub Total:</strong>
                </td>
                <td>
                  <input type="text" name="subtotal" class="form-control" id="subtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Price</strong>
                </td>
                <td>
                  <input type="text" name="price" class="form-control" id="vat">
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Grand Total:</strong>
                </td>
                <td>
                  <input type="text" name="grandtotal" class="form-control" id="vatsubtotal" value="0.00" readonly>
                </td>
                <td></td>
              </tr>
              <tr><td>
                <button name="save" value="save">save</button>
              </td></tr>
          </tbody>
        </table></form>
    </div>
 
<script type="text/javascript">
 $(document).ready(function() {

    $("#total").click(function() {
        /*var quantity = document.getElementById("quantity").value;*/
        var quantity = $("#quantity").val();

        var unitprice = $("#unitprice").val();
        var total = (quantity*unitprice);

         $('#total').val(total);
         $('#subtotal').val(total);
       
    });

    $('#vat').change(function() {
      var vInput = this.value;

      var subtotal = $("#subtotal").val();

      

      var vstotal = (parseFloat(subtotal) * parseFloat(vInput)).toFixed();
      $('#vatsubtotal').val(vstotal);
      });

   
 
});
 
</script>
 


</body>
</html>

   @endsection