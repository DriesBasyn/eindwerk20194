<?php

use App\Category;
use App\Http\Controllers\Front;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::get('/login', 'Front@login')->name('login');
Route::get('/logout', 'Front@logout')->name('logout');
/*front*/
Route::get('/','Front@index');
Route::get('/my_account/{id}','Front@my_account');
/*Route::get('index1','Front@index1');
Route::get('index2','Front@index2');*/
Route::get('about','Front@about')->name('about');
Route::get('blog','Front@blog')->name('blog');
Route::get('blog/post/{id}','Front@blog_post');
Route::get('contact','Front@contact')->name('contact');
/*product*/
Route::get('product','Front@product');
Route::get('product/details/{id}','Front@productdetails');


/*cart*/
Route::get('/checkout', 'Front@checkout');
Route::post('/checkout', function(Request $request){

    $gateway = new Braintree\Gateway([
        'environment' => config('services.braintree.environment'),
        'merchantId' => config('services.braintree.merchantId'),
        'publicKey' => config('services.braintree.publicKey'),
        'privateKey' => config('services.braintree.privateKey')
    ]);
    $amount = $request->amount;
    $nonce = $request->payment_method_nonce;
    /***betaling transactie zelf**/
    $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => $nonce,
        'options' => [
            'submitForSettlement' => true
        ],

    ]);
    /** gegevens van de klant bewaren in de vault van braintree***/
    $result2 = $gateway->customer()->create([
        'firstName' => 'Mike',
        'lastName' => 'Jones',
        'company' => 'Jones Co.',
        'email' => 'mike.jones@example.com',
        'phone' => '281.330.8004',
        'fax' => '419.555.1235',
        'website' => 'http://example.com'
    ]);
    //keuze naar braintree of naar tabel in database

    if ($result->success) {
        $transaction = $result->transaction;
        // header("Location: transaction.php?id=" . $transaction->id);
        $this_user = Auth::user();
        order::create(['user_id'=>$this_user->id,'transaction_id'=>$transaction->id,'price'=>$transaction->amount]);
        $clear = new Front();
        $clear->clear_cart();
        return back()->with('success_message', 'Transaction success. The ID is:'. $transaction->id);
    } else {
        $errorString = "";
        foreach($result->errors->deepAll() as $error) {
            $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
        }
        //$_SESSION["errors"] = $errorString;
        //header("Location: " . $baseUrl . "index.php");
        return back()->withErrors('An error occurred with the message: '.$result->message);
    }


});
Route::get('/cart', 'Front@cart');
Route::post('/cart','Front@cart');
Route::get('/clear-cart', 'Front@clear_cart');
/*search*/
Route::get('/search/{query}','Front@search');
Route::post('/search', function(){
    $qry = Input::get('search');
    //$filter = Input::get('filter');
    $products = Product::all();

    if(!empty($qry)){
        $s_prod = Product::where('title','LIKE','%'.$qry.'%')->get();
        if(count($s_prod)> 0){
            return view('search',compact('products','qry','s_prod'))/*->withFilter($filter)*/;
        }else{
            return view('search',compact('products','qry'))->withMessage('geen producten gevonden');
        }
    }else{
        return view('search',compact('products','qry'))->withMessage('geef een zoekterm in aub');
    }
});
/*admin*/
Route::get('/admin','DashboardController@index');
Route::resource('/brands','BrandsController');
Route::resource('/categories','CategoriesController');
Route::resource('/users','AdminUsersController');
Route::resource('/roles','RolesController');
Route::resource('/products','ProductsController');
/*home*/
Route::get('/home', 'HomeController@index');

Route::resource('/orders','OrdersController');

