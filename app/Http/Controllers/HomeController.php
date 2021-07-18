<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
      return view('welcome');
  }

  public function show(Request $request){
      // // return 'Show function is called';
      // $userid= $request->userid;
      // $age= $request->age;
      // $username= request('username');
      // $products= array('table', 'chair', 'stool');
      // // return view('homepage', ['products'=>$products, 'username'=>$username, 'userid'=>$userid, 'age'=>$age]);
      // return view('homepage',compact('userid','age','username','products'));
      // $products = Product::all();
      // $products = Product::find(1);
      // $id = 2;
      // $products = Product::find($id);
      // $products= Product::where('price','>', 200)->get();
      // $products= Product::orderBy('price', 'desc')->get();
       $products= Product::orderBy('price', 'asc')->get();
      dd($products);
  }
