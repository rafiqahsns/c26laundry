<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function layanan()
    {
        return view('layanan');
    }
    public function index()
    {
        return view('welcome2');
    }
    public function membership()
    {
        return view('membership');
    }
    public function tentangkami()
    {
        return view('tentangkami');
    }
    public function admin()
    {
        return view('admin.admin');
    }
}
