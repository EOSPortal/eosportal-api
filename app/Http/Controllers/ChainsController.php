<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChainsController extends Controller
{
    public function all()
    {
        return Datatables::of(Chain::query())->make(true);
    }

    public function index()
    {
        return view('tables.chain.index');
    }

}
