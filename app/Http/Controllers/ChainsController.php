<?php

namespace App\Http\Controllers;

use App\Chain;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ChainsController extends Controller
{
    public function all()
    {
        return DataTables::of(Chain::query())->make(true);
    }

    public function index()
    {
        return view('tables.chain.index');
    }

}
