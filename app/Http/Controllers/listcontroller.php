<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\buses;
use App\routes;
use App\updatebus;
use App\drivers;
use App\User;
use App\passenger;
use App\reservation;

class listcontroller extends Controller
{
    function showbus()
    {
        $data = buses::all()->where('status', '1');
        return view('admin\listbus',['listbus'=>$data]);
    }

    function showroutes()
    {
        $data = routes::all()->where('status', '1');
        return view('admin\listroutes',['listroutes'=>$data]);
    }

    function showlandingroutes()
    {
        $data = routes::all()->where('status', '1');
        return view('landing\partial\routes',['listroutes'=>$data]);
    }
    function showusers()
    {
        $data = user::all();
        return view('admin\usersdata',['usersdata'=>$data]);
    }

    function showpassenger()
    {
        $data = passenger::all();
        return view('admin\listpassenger',['pdata'=>$data]);
    }

    function showupdatepassenger()
    {
        $data = passenger::all();
        return view('admin\updatepassenger',['pdata'=>$data]);
    }

    function showreservation()
    {
        $data = reservation::with('passenger','bus','route')->get();
        dd($data);
        return view('admin\listreservation',['reservationdata'=>$data]);
    }

    function deleteuser($id)
    {
        $data=user::find($id);
        if($id == '1')
        {
            return redirect('users')->with('superadmin','No Action Available');
        }else{
            $data->delete();
            return redirect('users')->with('delete','User Removed Sucessfully');
        }
    }

    function showdriver()
    {
        $data = drivers::all()->where('status', '1');
        return view('admin\listdriver',['listdriver'=>$data]);
    }

      function showupdatedriver()
    {
        $data = drivers::all();
        return view('admin\updatedrivers',['listdriver'=>$data]);
    }

    function updatebus()
    {
        $data = buses::all();
        return view('admin\updatebus',['updatebus'=>$data]);
    }

    function updatereservation()
    {
        $data = reservation::all();
        return view('admin\updatereservation',['updatereservation'=>$data]);
    }

    function deletebus($id)
    {
        $data=buses::find($id);
        $data->delete();
        return redirect('updatebus')->with('danger','Bus Removed Sucessfully');
    }

    function deletedriver($id)
    {
        $data=drivers::find($id);
        $data->delete();
        return redirect('updatedrivers')->with('danger','Driver Removed Sucessfully');
    }

    function updateroutes()
    {
        $data = routes::all();
        return view('admin\updateroutes',['listroutes'=>$data]);
    }

    function deleteroutes($routesid)
    {
        $routesid=routes::find($routesid);
        $routesid->delete();
        return redirect('updateroutes')->with('danger','Route Removed Sucessfully');
    }

    function deletereservation($id)
    {
        $rid=reservation::find($id);
        $rid->delete();
        return redirect('updatereservation')->with('danger','Reservation Removed Sucessfully');
    }

    function deletepassenger($id)
    {
        $pid=passenger::find($id);
        $pid->delete();
        return redirect('updatepassenger')->with('danger','Passenger Removed Sucessfully');
    }

    function editbus($id)
    {
        $data = buses::find($id);
        return view('admin\editbus',['data'=>$data]);

    }

    function showeditdriver($id)
    {
        $data = drivers::find($id);
        return view('admin\editdriver',['data'=>$data]);

    }

    function edit(Request $req)
    {
        $data=buses::find($req->id);
        $data->busname=$req->busname;
        //$data->busnumber=$req->busnumber;
        $data->bustype=$req->bustype;
        $data->save();
        return redirect('updatebus')->with('success','Bus Has Been Updated Sucessfully');
    }

    function editdriverform(Request $req)
    {
        $data=drivers::find($req->id);
        //$data->name=$req->name;
       // $data->licenseno=$req->licenseno;
        $data->phonenumber=$req->phonenumber;
        $data->address=$req->address;
        $data->save();
        return redirect('updatedrivers')->with('success','Driver Has Been Updated Sucessfully');

    }
}


