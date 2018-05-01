<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlocksController extends Controller
{
    public function all()
    {
        return Datatables::of(Block::query())->make(true);
    }

    public function index()
    {
        return view('tables.block.index');
    }

}
