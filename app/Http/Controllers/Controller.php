<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('welcome');
    }
    public function membership()
    {
        return view('membership');
    }
    public function tentangkami()
    {
        return view('tentangkami');
    }
    public function layanan()
    {
        return view('layanan');
    }
    public function login()
    {
        return view('login');
    }
    public function orderbaru()
    {
        return view('staff.orderbaru');
    }
    public function tambahlaundry()
    {
        return view('staff.tambahlaundry');
    }
    public function pembayaranbiasa()
    {
        return view('staff.pembayaranbiasa');
    }
    public function ceksaldo()
    {
        return view('ceksaldo');
    }
    public function memberbaru()
    {
        return view('staff.memberbaru');
    }
    public function tambahdeposit()
    {
        return view('staff.tambahdeposit');
    }
    public function ambillaundry()
    {
        return view('staff.ambillaundry');
    }
}
