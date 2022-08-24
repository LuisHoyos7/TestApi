<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        return view('home');
    }

    public function loginWefu(){

        $user = \Auth::user();
        
        $request = Http::post('http://localhost/wefuniversity/api/loginWefu', 
            [
               'email' => $user->email,
            ]

        );
        
         return $request->body();

        // $this->assertEquals($product->body(), 'Product has been created successfully');
    
        // dd(request()->get('code'));
    }
}
