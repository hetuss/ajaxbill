<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response;
use App\Product; 
class RecieptController extends Controller
{
   public function index()
   {
      $data['products'] = DB::table('products')->get();
       return view("Bill",$data);
   }
 
   public function getPrice()
   {
      $getPrice = $_GET['id'];
      $price  = DB::table('products')->where('id', $getPrice)->get();
      return Response::json($price);
   }   
  
}

