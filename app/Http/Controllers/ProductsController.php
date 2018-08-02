<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Resources\ProductsCollection;
use App\ShoppingCart;
use Session;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    public function index(Request $request)
    {   
        \Session::remove('shopping_cart_id');
        $products = Product::paginate(10);
        if($request->wantsJson())
        {
            return new ProductsCollection($products);
        }
        return view('products.index',compact('products','shopping_cart'));
    }

  
    public function create()
    {
        $product = new Product;
        return view('products.create',compact('product'));
    }

    
    public function store(Request $request)
    {
        $options = [
            'title'        => $request->title,
            'description'  => $request->description,
            'price'        => $request->price 
        ];
        if(Product::create($options)){
            return redirect('/productos');
        }else{
            return view('products.create');
        }
;    }

   
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }

   
    public function update(Request $request, $id)
    {
        $product = product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        if($product->save()){
            return redirect('/');
        }else{
            return view ('products.edit',compact('product'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy($id);
        return redirect('productos');
    }
}
