<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        return view('client.home');
    }
    public function explore()
    {
        return view('client.explore');
    }
    public function aboutUs()
    {
        return view('client.aboutUs');
    }
    public function contactUs()
    {
        return view('client.contactUs');
    }
}
