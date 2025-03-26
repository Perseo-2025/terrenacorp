<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class InmueblesController extends Controller
{
    public function index()
    {
        return view('inmuebles.index');
    }
    public function edit(Owner $owner)
    {
        return view('inmuebles.index'); 
     
    }
    public function create()
    {
        return view('inmuebles.create');
    }
}
