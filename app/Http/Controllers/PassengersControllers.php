<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PassengersControllers extends Controller
{
    public function savepassenger(Request $request)
    {
  
      $firstname = $request->input('firstname');
      $lastname = $request->input('lastname');
      $address = $request->input('address');
      $city = $request->input('city');
      $phonenumber = $request->input('phonenumber');
      $email = $request->input('email');
      $status = $request->input('status');
      
      DB::insert('insert into passengers (firstname,lastname,address,city,phonenumber,email,status) values (?,?,?,?,?,?,?)' 
      , [$firstname, $lastname,  $address, $city, $phonenumber, $email, $status]);
      
      return redirect('addpassenger')->with('success','Passenger Added Sucessfully, You can proceed for reservation');
    }
}
