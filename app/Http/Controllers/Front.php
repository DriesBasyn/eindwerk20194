<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;*/
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Brand;
use App\Category;
use App\Product;

use Cart;
use DB;
use Braintree;

class Front extends Controller
{
    var $brands;
    var $categories;
    var $products;
    var $cart;
    public function __construct()
    {
        $this->brands=Brand::all('name');
        $this->categories=Category::all('name');
        $this->products=Product::all();
        $this->cart = Cart::content();


    }

    public function index(){
        $brands = Brand::all();
        $categories = Category::all(array('name'));
        $products = Product::all();
        return view('index',compact('brands','categories','products','count','cart'));
    }

    public function about(){
        return view('about');
    }
    public function blog()
    {
        return view('blog');
    }
    /*  /*  public function blog(){
            return view('blog');
        }
        public function blog_post(){
            return view('blog-detail');
        }*/

    public function contact(){
        return view('productdetail');
/*        return view('contact',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'contact_us'));*/
    }
    public function product(){

        return view('product',compact('cart'),array('title' => 'Products listing',
            'description'=>'lorem ipsum', 'page'=>'products',
            'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }


    public function productdetails($id){
        $product = Product::find($id);
        return view('productdetail' ,compact('cart'),array(
            'product' => $product ,'title'=>$product->name,
            'description'=>$product->description,
            'page'=>'products',
            'brands'=>$this->brands,
            'categories' => $this->categories,
            'products'=>$this->products));
    }

    public function my_account($id){
        $user = User::where('id',$id)->first();
        $orders = Order::where('user_id',$id)->get();
        $products = Product::all();

        return view('my_account',compact('categories','orders','products'),array('title'=>$user->name));
    }

    public function login(){
        return view('login',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'home'));
    }
    public function logout(){
        return view('logout',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'home'));
    }

   /* public function welcome(){
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        $token = $gateway->ClientToken()->generate();
        return view('cart',compact('token','cart')
        );
    }*/

    public  function cart(){
        if(Request::isMethod('post')){
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
        }
        $cart = Cart::content();

        //increment
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $item = Cart::search(
                function($key, $value) {
                    return $key->id == Request::get('product_id');
                })->first();
            Cart::update($item->rowId, $item->qty + 1);
        }

        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::update($item->rowId, $item->qty - 1);
        }

        //delete item
        if (Request::get('product_id') && (Request::get('delete')) == 1) {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::remove($item->rowId);
        }


        //return view('cart',array('cart' => $cart, 'title' => 'Welcome', 'description' => 'lorem','page'=>'home'));
        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);
        $token = $gateway->ClientToken()->generate();
        return view('cart',compact('token','cart')
        );
    }

    public function clear_cart(){
        Cart::destroy();
        return Redirect::away('cart');
    }



    public function search($query){
        return view('products',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'products'));
    }

}
