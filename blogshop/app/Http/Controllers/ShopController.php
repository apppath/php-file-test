<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop; 
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::orderBy('created_at' , 'desc')->get();
        return view('pages.index')->with('shops' , $shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

      $this->validate($request , [
      'title'=> 'required',
      'brand'=> 'required',
      'price'=> 'required',
      'images'=> 'required',
      'details'=> 'required'
       ]);

        $shop = new Shop;
        $shop->title = $request->input('title');
        $shop->brand = $request->input('brand');
        $shop->price = $request->input('price');
        $shop->images = $request->input('images');
        $shop->details = $request->input('details');

        $shop->save();
        return redirect('/')->with('success' , 'Product Saved Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        return view('pages.show')->with('shop' , $shop);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('pages.edit')->with('shop' , $shop);
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
        
      
      $shop = Shop::find($id);
      $shop->title = $request->input('title');
      $shop->brand = $request->input('brand');
      $shop->price = $request->input('price');
      $shop->images = $request->input('images');
      $shop->details = $request->input('details');
      $shop->save();
      return redirect('/')->with('success' , 'Shop Update Successfully');
      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $shop = Shop::find($id);
        $shop->delete();
        return redirect('/')->with('danger' , 'Product Deleted Successfully');

    }
}
