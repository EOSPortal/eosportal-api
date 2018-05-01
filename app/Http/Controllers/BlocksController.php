<?php

namespace App\Http\Controllers;

use App\Block;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BlocksController extends Controller
{
    public function all()
    {
        return DataTables::of(Block::query())->make(true);
    }

    public function index()
    {
        return view('tables.block.index');
    }

}
