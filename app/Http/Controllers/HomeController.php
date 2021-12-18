<?php

namespace App\Http\Controllers;

use App\Models\Demonstrative;

class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $demonstrative;
    public function __construct(Demonstrative $demonstrative)
    {
        $this->middleware('auth');
        $this->demonstrative = $demonstrative;
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->demonstrative->orderby('created', 'desc')->paginate(30);
        return view('panel.admin.pages.demonstrative.index', compact('data'));
    }
}
