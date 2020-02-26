<?php

namespace App\Http\Controllers;

use App\form;
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
    
    
        $p_action = 0;
        $form_id = null;
        $list_form = form::all();

        return view('home',compact('list_form','p_action','form_id'));
    }
    
    
}
