<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AddbusController extends Controller
{
   public function savebus(Request $request)
  {

    $busname = $request->input('busname');
    $busnumber = $request->input('busnumber');
    $bustype = $request->input('bustype');

    DB::insert('insert into buses (busname,busnumber,bustype) values (?,?,?)' 
    , [$busname,  $busnumber, $bustype]);
    
    return redirect('addbus')->with('success','Bus Added Sucessfully');
  }
}

// $data=$request->all();     
    // $savedata=new addbus;
    // $savedata->busname=$data['busname'];
    // $savedata->busnumber=$data['busnumber'];
    // $savedata->drivername=$data['drivername'];
    // $savedata->totalseats=$data['totalseats'];
    // $savedata->save();