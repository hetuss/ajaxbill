@extends('layouts.backend.main')
@section('content')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
   
</head> 
<body>
  <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Bill Table</strong>
                            </div>

                            <div class="card-body">
                               <form method="POST" enctype="multipart/form-data" action="{{route('store.bill')}}">
                                @csrf
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                   
                                    <tbody> 
                          <tr><td>name</td>
                        <td><input type="text" name="name"><td></tr>

                         <tr><td>address</td>
                      <td> <textarea name="address"></textarea></td></tr>

                         <tr><td>email</td>
                        <td><input type="text" name="email"></td></tr>
                        
                        <tr><td>Phone</td>
                        <td><input type="text" name="phone"></td></tr>
                        
                                           

                                         </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
   
  </table>
   <button type="submit" name="submit">save</button>
 </form>
 
</body>
</html>
 @endsection