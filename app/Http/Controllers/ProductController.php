<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\ProductRating;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function submitRating(Request $request)
    {
        // 
        //dd($request);
        $productRating_model = new ProductRating();
        $pid=$request->product_row_id;
        $productRating_model->user_id=0;
        $productRating_model->product_row_id=$request->product_id;

        $productRating_model->rating=$request->rating;
        $productRating_model->reviews=$request->comment;

        
        $productRating_model->save();
        Session::flash('success message', 'thanks');
        return \Redirect::to ('/product/details/'.$pid);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
