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
      // $products= Product::orderBy('price', 'asc')->get();
      // dd($products);
      // Product::create([
      //     'id'=>4,
      //     'name'=>'mug',
      //     'quantity'=>1000,
      //     'price'=>250,
      //     'color' =>'blue'
      // ]);
      // return 'Successfullly Executed!';

      // $readOperation = Product::all();
      // $readOperation = Product::select('*')->get();
      // $readOperation = Product::select('name','price')->get();
      // $readOperation = Product::where('price','>', 300)->get();
      // $readOperation = Product::select('name','price','quantity')->where('price','>', 250)->get();
      // $readOperation = Product::select('name','price','quantity')->where('id','=', 1)->get();
      // $readOperation = Product::select('name','price','quantity')->where('id','>=', 2)->get();
      // $readOperation = Product::select('name','price','quantity')->where('color','=', 'blue')->get();
      // $readOperation = Product::select('name','price','quantity')->where('price','<', 250)->first();
      // dd($readOperation);
      // return $readOperation;

      // Product::where('id','=',1)->update([
      //   'name'=>'table',
      //   'quantity'=>'200'
      // ]);

     // Product::where('id', '=', '1')->delete();
     // Product::create([
     //     'id'=>1,
     //     'name'=>'table',
     //     'quantity'=>200,
     //     'price'=>500,
     //     'color' =>'red'
     // ]);
     // return 'Successfullly Executed!';

     return 'Successfullly Executed!';
  }
}
