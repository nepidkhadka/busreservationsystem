<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AddDriversController extends Controller
{
    public function savedriver(Request $request)
    {
  
      $name = $request->input('name');
      $licenseno = $request->input('licenseno');
      $phonenumber = $request->input('phonenumber');
      $address = $request->input('address');
      
      DB::insert('insert into drivers (name,licenseno,phonenumber,address) values (?,?,?,?)' 
      , [$name,  $licenseno, $phonenumber, $address]);
      
      return redirect('adddriver')->with('success','Driver Added Sucessfully');
    }

}
