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
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                              <form  method="POST" enctype="multipart/form-data" action="{{route('update.bill')}}">

                              	 @csrf
                                 <input type="text" name="id" value="{{$bills->id}}">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <tr>
                                <td height="20" width="20">name</td>
                                <td><input type="text" name="name" value="{{$bills->name}}"></td></tr>
                            <tr>
                                <td height="20" width="20">address</td>
                                <td><textarea name="address"  value="{{$bills->address}}"></textarea></td></tr>
                            
                                 <tr>
                                <td height="20" width="20">email</td>
                                <td><input type="text" name="email" value="{{$bills->email}}"></td></tr>
                            <tr>
                                 <tr>
                                <td height="20" width="20">phone</td>
                                <td><input type="text" name="email" value="{{$bills->phone}}"></td></tr>
                            <tr>
                                 <td colspan="2">
                         <input type="submit" name="submit" value="SAVE" class="btn btn-success">
                         
                                </td>
                            </tr>
                                </table>
                              </div>
                            </div>
                        </form>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


 

    

 @endsection