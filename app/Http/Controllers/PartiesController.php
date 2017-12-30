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
}