<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class InfoController extends Controller
{
    public function all()
    {
        return DataTables::of(Info::query())->make(true);
    }

    public function index()
    {
        return view('tables.info.index');
    }

}
