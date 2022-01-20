@extends('layouts.backend.main')
@section('content')
<link href="css/bootstrap.min.css" rel="stylesheet/">
<script src="js/jquery.min.js"></script>
<script src="js/jautocalc.min.js"></script>
<script src="js/script.js"></script>

<table  width="900" height="150" align="left">
     <form  method="POST" enctype="multipart/form-data">
                                 @csrf
                                 
                          <tr><td height="40" width="100"><b>name :</b></td>
                        <td>{{ $bds->name}}</td></tr>

                         <tr><td height="40" width="100"><b>address  :</b></td>
                      <td>{{ $bds->address}}</td></tr>

                         <tr><td height="40" width="100"><b>email  :</b></td>
                        <td>{{ $bds->email}}</td></tr>
                        
                         <tr><td height="40" width="100"><b>Phone no  :</b></td>
                        <td>{{ $bds->phone}}</td></tr>
                       <tr></tr>
                                         </tr>
                                   
                              
                               </form>
</table>
    
<!-- make dynamic input field -->
  <!Doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
 
  <!-- make dynamic input field -->
    <div class="col-md-12"> 
    <form  method="POST" enctype="multipart/form-data" action="{{route('storeclient')}}">
                                 @csrf 
                               <input type="hidden" name="client" value="{{$bds->id}}">
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
                            <option selected disabled>Select</option>
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
                  <input type="text" name="price" class="form-control" id="vat" placeholder="Price">
                </td>
                <td></td>
              </tr>
              <tr>
                <td colspan="3"></td>
                <td>
                  <strong>Grand Total:</strong>
                </td>
                <td>
                  <input type="text" name="grandtotal" class="form-control ttl" id="vatsubtotal" value="0.00" readonly>
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
 
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    
                                   </div>
                <div class="mt-3">
                    <div class="table-responsive">
                       
                    </div>
                </div>
                <div class="text-right mb-3"></div>
            </div>
        </div>
    </div>
</div>
  

<style type="text/css">
  
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: #111-222
            </small>
        </h1>

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                   <b  style="color:black;"> Print</b>
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="{{route('pdf',$bills->id)}}" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    <b style="color: black;">Export</b>
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                          
                            
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <span class="text-sm text-grey-m2 align-middle">To:</span>
                            <span class="text-600 text-110 text-blue align-middle">{{$bills->name}}</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                {{$bills->address}}
                            </div>
                            <div class="my-1">
                               {{ $bills->email}}
                            </div>
                            <div class="my-1"><i class="fa fa-phone fa-flip-horizontal text-secondary"></i> <b class="text-600"><div class="my-1">
                               {{ $bills->phone}}
                            </div></b></div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #111-222</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Oct 12, 2019</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">Unpaid</span></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                 <table class="table">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Category</th>
                                    <th>Product name</th>
                                    <th>Quentity</th>
                                    <th>Unit</th>
                                    <th>Total</th>
                                    <th>Price</th>
                                    <th>Grand Total</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                           <tbody>
                              @foreach($products as $products)
                                         <tr>
                                            
                                            <td>{{$products->client}}</td>
                                            <td>{{$products->category}}</td>
                                            <td>{{$products->product}}</td>
                                            <td>{{$products->quantity}}</td>
                                            <td>{{$products->unit_price}}</td>
                                            <td>{{$products->total}}</td>
                                            <td>{{$products->price}}</td>
                                            <td>{{$products->grandtotal}}</td>

                                            <td> 

                                                <a href="{{route('edit.details',$products->id)}}" ><i class="fa fa-edit fa-lg"  aria-hidden="true" style="color:green;"></i></a>&nbsp;&nbsp;
                                                <a href="{{route('delete.details',$products->id)}}" class="button delete-confirm"><i class="fa fa-trash fa-lg"  aria-hidden="true" style="color:red;"></i></a>&nbsp;&nbsp; 
                                           </td>
   
                                         </tr>  
                                         
                                            
                                         @endforeach

                           </tbody>
                        </table>
Total: <div id="totalvalue" >0</div>

                    <div class="row border-b-2 brc-default-l2"></div>
</div>
                    <!-- or use a table instead -->
                    <!--
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">#</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th width="140">Amount</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr>
                            <td>1</td>
                            <td>Domain registration</td>
                            <td>2</td>
                            <td class="text-95">$10</td>
                            <td class="text-secondary-d2">$20</td>
                        </tr> 
                    </tbody>
                </table>
            </div>
            -->
                           
                        </div>
                    </div>

                    <hr />

                    <div>
                        <span class="text-secondary-d1 text-105">Thank you for your business</span>
                        <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 @endsection