<?php

namespace App\Http\Controllers;
use App\buses;
use App\routes;
use App\User;
use App\drivers;
use App\reservation;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/admin');
    }

    public function usersdata()
    {
        return view('admin/usersdata');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function addbus()
    {
        return view('admin/addbus');
    }

    public function adddriver()
    {
        return view('admin/adddriver');
    }

    public function addroutes()
    {
        return view('admin/addroutes');
    }

    public function addpassenger()
    {
        return view('admin/addpassenger');
    }

    public function listbus()
    {
        return view('admin/listbus');
    }

    public function updatebus()
    {
        return view('admin/updatebus');
    }

    public function reservebus()
    {
        return view('admin/reservebus');
    }


    public function dashcount()
    {
        $total_bus = buses::count();
        $total_routes = routes::count();
        $total_users = User::count();
        $total_drivers = drivers::count();
        $added_passengers = drivers::count();
        $total_reservation = reservation::count();

        return view('admin/dashboard',compact('total_bus','total_routes', 'total_users','total_drivers','added_passengers','total_reservation'));
    }
}
