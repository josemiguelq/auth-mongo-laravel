<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Network;

class NetworkController extends Controller
{
    public function index(){

        return $network = Network::all();
    }

    public function show(){

        return $network = Network::all();
    }

    public function store(){


    }
}
