<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function all()
    {
        return Datatables::of(Info::query())->make(true);
    }

    public function index()
    {
        return view('tables.info.index');
    }

}
