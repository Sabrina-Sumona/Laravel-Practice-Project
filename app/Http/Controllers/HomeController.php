<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  public function index(){
      return view('welcome');
  }

  public function show(Request $request){
      // return 'Show function is called';
      $userid= $request->userid;
      $age= $request->age;
      $username= request('username');
      $products= array('table', 'chair', 'stool');
      // return view('homepage', ['products'=>$products, 'username'=>$username, 'userid'=>$userid, 'age'=>$age]);
      return view('homepage',compact('userid','age','username','products'));

// insertion operation
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

// read operation
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

// update operation
      // Product::where('id','=',1)->update([
      //   'name'=>'table',
      //   'quantity'=>'200'
      // ]);

// delete operation
     // Product::where('id', '=', '1')->delete();
     // return 'Successfullly Executed!';
  }

  public function insertOperation(){
    // DB::table('products')->insert([
    //       'id'=>5,
    //       'name'=>'comb',
    //       'quantity'=>100,
    //       'price'=>50,
    //       'color' =>'purple'
    // ]);
    DB::insert('INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `color`) VALUES (?,?,?,?,?)',[6,'brush',23,100,'multi']);
    return 'Insertion Operation Successfullly Executed!';
  }

  public function readOperation(){
    // $product = DB::table('products')->select(['name','price','color'])->where('id','<=', 2)->get();
    $product = DB::select('SELECT  `name`, `price`, `color` FROM `products` WHERE id = 1');
    return $product;
  }

  public function updateOperation(){
    // DB::table('products')->where('id','=', 2)->update(['quantity'=>300]);
    DB::update('UPDATE `products` SET `quantity`=400, `price`=400 WHERE id = 2');
    return 'Updation Operation Successfullly Executed!';
  }

  public function deleteOperation(){
    // DB::table('products')->delete(1);
    DB::delete('DELETE FROM `products` WHERE id = 5');
    return 'Deletion Operation Successfullly Executed!';
  }
}
