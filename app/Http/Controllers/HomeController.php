<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passport;
use App\Models\Dashboard;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboard = new Dashboard;
         
        // dd($dashboard->payment_sum(4));
        return view('home',compact('dashboard'));
    }
}
