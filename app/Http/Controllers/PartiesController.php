<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Party;

class PartiesController extends Controller
{
    public function __construct ()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    public function show (Request $request, $random_id)
    {
        $party = Party::where('random_id', $random_id);
        return view('parties.show');
    }

    public function create (Request $request)
    {
        return view('parties.create');
    }
}