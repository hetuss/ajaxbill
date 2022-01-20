<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Bill;
use App\Category;
use App\Product;
use PDF; 
use Redirect,Response;
class AjaxController extends Controller
{
     public function index()
    {
        //
        $data['posts'] = Bill::orderBy('id','desc')->paginate(8);
    
        return view('bill',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $postID = $request->post_id;
        $post   =   Bill::updateOrCreate(['id' => $postID],
                    ['title' => $request->title,'email' => $request->email, 'body' => $request->body]);
    
        return Response::json($post);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $where = array('id' => $id);
        $post  = Bill::where($where)->first();
 
        return Response::json($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Bill::where('id',$id)->delete();
   
        return Response::json($post);
    }
     public function indexs()
   {
    $bills=Bill::get();
    return view('detailspage',compact('bills'));
   }
    // public function showbill()
    // {
    //      $bills= Bill::get(); 
    //     return view('bill',compact('bills'));
    // }
   //  public function insert()
   //  {    
   //       return view('addbill');
   // }
   // public function storedata(Request $request)
   // {
   //       $bills = new Bill();
   //       $bills->name =$request->input('name');
   //       $bills->address =$request->input('address');
   //       $bills->email =$request->input('email');
   //       $bills->phone =$request->input('phone');
   //       $bills->save();
   //       return redirect()->route('bill');
   //  }
 // public function editbill(Request $request ,$id)
 //    {
 //         $bills= Bill::get();
       
 //        $bills=Bill::where('id',$id)->first();
 //        return view('editbill',compact('bills'));


 //    }

 //    public function updatebill(Request $request)
 //    {
 //         $bills =Bill::find($request->id);
 //         $bills->name =$request->input('name');
 //         $bills->address =$request->input('address');
 //         $bills->email=$request->input('email');
 //          $bills->phone=$request->input('phone');
        
 //            $id = $request->id;
 //            $update = [  
 //            'name'=>$request->name,
 //           'address'=>$request->address,
 //           'email'=>$request->email, 
 //           'phone'=>$request->phone,
           
 //     ];
 //        $bills->save();
 //        return redirect()->route('bill');
 //    }
   
    public function detailspage(Request $request , $id)
    {    

         $bds=Bill::where('id',$id)->first();
          $products=Product::where('client',$id)->get();
         $category=Category::get();
        return view('detailspage',compact('bds','category','products'));
    }
//     public function editdetail(Request $request ,$id)
//     {      
//           $category=Category::get();
//         $products=Product::where('id',$id)->first();
//         return view('editdetails',compact('products','category'));
//     }
//      public function updatedetails(Request $request)
//     {   
//          $product =Product::find($request->id);
//          $product->category =$request->input('category');
//          $product->product =$request->input('product');
//          $product->quantity =$request->input('quantity');
//          $product->unit_price =$request->input('unit_price');
//          $product->total =$request->input('total');
//          $product->price = $request->input('price');
//          $product->grandtotal = $request->input('grandtotal');

//             $id = $request->id;
//             $update = [  
          
//            'category'=>$request->category,
//            'product'=>$request->product, 
//            'quantity'=>$request->quantity,
//            'unit_price'=>$request->unit_price,
//            'total'=>$request->total,
//            'price'=>$request->price,
//             'grandtotal'=>$request->grandtotal,
           
           
//      ];
//          Product::where('id', $id)->update($update);
       

//         $product->save();
//         return redirect()->back();
//     }

// public function deletedetails($id)
//     {
//         Product::where('id',$id)->delete();
//         return redirect()->back();
//     }
    public function generatepdf(Request $request ,$id)

    { 
        $bills=Bill::where('id',$id)->first();
        $products=Product::where('client',$id)->get();
        $pdf = PDF::loadView('pdf', compact('bills','products'));

          $pdf->setPaper('L');
            $pdf->output();
            $canvas = $pdf->getDomPDF()->getCanvas();
            $height = $canvas->get_height();
            $width = $canvas->get_width();
            $canvas->set_opacity(.2,"Multiply");
            $canvas->page_text($width/5, $height/2, 'Hetuuu', null,
             70, array(0,0,0),2,2,-30);
            
          return $pdf->stream();

    }
    public function client()
{
   
    return view('detailspage');
}

public function storeclient(Request $request)
   {

         $product = new Product();
         $product->client =$request->input('client');
         $product->category =$request->input('category');
         $product->product =$request->input('product');
         $product->quantity =$request->input('quantity');
         $product->unit_price =$request->input('unit_price');
         $product->total =$request->input('total');
         $product->price = $request->input('price');
         $product->grandtotal = $request->input('grandtotal');

         $product->save();
         return redirect()->back();
    }

    
}
?>