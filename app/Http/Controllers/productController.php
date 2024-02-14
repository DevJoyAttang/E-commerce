<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\productController;
use App\Models\Product;


class productController extends Controller
{
    protected $product;
    public function __construct(Product $product) {    
        $this->product = $product;
    }
    
    public function updateProduct($productID){
        $product =$this->product->find($productID);
        return view('editform',['product'=>$product]);

    }
    
        public function editUpdate($productID ,Request $request){
            $request->validate([
                "name" => "required",
                "description" => "required",
                "price" => "required",
                "quantity" => "required",
                "status" => "required",
            ]);

            $product=$this->product->find($productID);

            $product->update($request->all());            
            
            return redirect()->route('products','product updated succesful');
        }
        public function deleteproduct($productID)
        {
            $product=product::find($productID);
            $product->delete();
            return redirect()->route('products','product deleted');
        }
        

    public function productCreate(Request $request){
        
             $request->validate ([
            "name" => "required",
            "description" => "required",
            "price" => "required",
            "quantity" => "required",
             "status" => "required",

            ]); 

            $productDetails= [
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price,
                "quantity" =>$request->quantity,
                 "status" => $request->status, 
            ];

            $product = new Product;
            $product->create($productDetails);
            return redirect()->route( 'products');

    }

    public function productview(){
        $products = new Product;
        $products->all();
        return view('products',['products' =>$products->all()]);
    }
     
      
    public function productsfile(){
        return view('productregistration');
    }

    public function productsales(){
        $products = new Product;
        // dd($products->all());
        return view('salesproduct', ['products' =>$products->all()]);

    }
    public function checkoutproduct(){
        $products = new Product;
        // dd($products->all());
        return view('checkout', ['products' =>$products->all()]);
        
    }
    

  
}


