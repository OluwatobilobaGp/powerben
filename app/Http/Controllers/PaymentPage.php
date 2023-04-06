<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class PaymentPage extends Controller
{
    public function Payment()
    {
        // $data = array();
        // if (Session::has('loginId')){

        return view('payment');            
        
        // }


    }
}
