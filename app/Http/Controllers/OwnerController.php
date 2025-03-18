<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        return view('propietarios.index');
    }
    public function edit(Owner $owner)
    {

        
        return view('propietarios.edit', [
            'owner' => $owner
        ]);
    }
    public function create()
    {
        return view('propietarios.create');
    }
}
