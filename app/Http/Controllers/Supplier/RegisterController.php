<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Constructor
     */    
    function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Register a Supplier
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {
        return view('suppliers.register');
    }
}
