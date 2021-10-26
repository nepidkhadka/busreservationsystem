<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\routes;
use App\passenger;
use App\buses;

class ReservationController extends Controller
{
    //
    public function savereservation(Request $request)
    {
  
      $pid = $request->input('pid');
      $busid = $request->input('busid');
      $routesid = $request->input('routesid');
      $date = $request->input('date');
      $seatno = $request->input('seatno');
      $status = $request->input('status');

      DB::insert('insert into reservations (passengerid,busid,routesid ,date,seatno) values (?,?,?,?,?)' 
      , [$pid, $busid, $routesid,  $date, $seatno]);
      
      return redirect('reservebus')->with('success','Reservation has been made Sucessfully');
    }

    public function fetchreservationdata()
    {

        $pid = passenger::select('id')->where('status', '0')->get();
        $routesid = routes::select('id')->where('status', '1')->get();
        $busid = buses::select('id')->where('status', '1')->get();
        // $users = DB::select('select * from reservation');
        // return view('admin/reservebus',['users'=>$users]);
            
        // $pid = passenger::all();
        // $routesid = routes::all();
        return view('admin/reservebus',compact('pid','routesid','busid'));
    }
}
