<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    // LANDING

    public function landingView()
    {
        return view ('landing');
    }

    // PRODUCT

    public function productView()
    {
        $product = Product::all();
        return view ('content.index', compact('product'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart{$id})){
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "image" => $product->image,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function remove(Request $request)
    {
        if($request->id_product) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id_product])) {
                unset($cart[$request->id_product]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function productAddView(){
        return view ('content.productadd');
    }

    public function productStore(Request $request)
    {
        Product::create($request->all());
        return redirect ('/product');
    }

    public function deleteProduct($id){
        $book = Product::find($id);
        $book -> delete();
        return redirect ('/product');
    }

    // CART

    public function cartView()
    {
        return view ('content.cart');
    }

    public function update(Request $request)
    {
        if($request->id_product && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id_product]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function checkout(Request $request){
       
        $id_product = $request->id_product;
        $total_pesanan = $request->total_pesanan;
        $totalPrice = $request->totalPrice;
 
            for($i=0;$i<count((array)$id_product);$i++){
                Order::create([
                    'id_product' => $id_product[$i],
                    'total_pesanan' => $total_pesanan[$i],
                    'totalPrice' => $totalPrice[$i]
                ]);

               
            }

        // $item = new Product();
        // $total = ($item->stok - $request->total_pesanan);
        // // $item->where('id_product', '=', $request->id_product)->decrement('stok', $request->total_pesanan);
        // Product::where('id_product','=',$id_product)->update(['stok'=>$total]);

        $request->session()->forget('cart');
        
        Session::flash('add-product', 'success');
        Session::flash('message', 'Product orders successfully!');
        return redirect('/product');
    }
}
