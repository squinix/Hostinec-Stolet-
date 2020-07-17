<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function store(Request $request)
    {
        
        $request->validate([
            'denni_menu' => 'required|file|image|max:5000'
        ]);
        $imageName = 'denni_menu.jpg';
        $request->denni_menu->move(public_path('storage/uploads'), $imageName);

        return redirect('home');


/*         request()->validate([
            'denni_menu' => 'required|file|image|max:5000'
        ]);
        $request->file('denni_menu')->storeAs(
            public_path('storage/uploads'), 'denni_menu.jpg'
        );

        return redirect('home'); */
    }
}
