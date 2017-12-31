<?php

namespace App\Http\Controllers;

use App\Party;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $res['studentUsers'] = User::where('role', 'student')->get();
        $res['employeeUsers'] = User::where('role', 'employee')->get();
        return view('parties.create', $res);
    }

    public function store (Request $request)
    {
        Party::andPollsCreate($request);
        return view('home');
    }
}