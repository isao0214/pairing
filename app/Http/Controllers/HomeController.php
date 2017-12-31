<?php

namespace App\Http\Controllers;

use App\Party;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $res['parties'] = Party::where('user_id', $user->id)->get();
        return view('home', $res);
    }
}
