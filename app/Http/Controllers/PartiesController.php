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

    public function store (Request $request)
    {
        $user = Auth::user();
        $party = new Party;
        $party = $party->fill($request->party);
        $party->user_id = $user->id;
        $party->setRandomId();
        $party->save();
        return view('parties.create');
    }
}