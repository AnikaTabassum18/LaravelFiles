<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(){

        $user=Auth::user();
        //dd($user);
          $product = DB::table('product')->get();

        return view('home', ['product' => $product]);
    }


    public function productDetails($productid){
        $data=DB::table('product')->where('product_row_id',$productid)->first();
        return view('product_detail',['data'=>$data]);
    }
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  
}
