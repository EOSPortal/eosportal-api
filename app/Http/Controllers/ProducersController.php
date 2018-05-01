<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducersController extends Controller
{
    public function all()
    {
        return Datatables::of(Producer::query())->make(true);
    }

    public function index()
    {
        return view('tables.producer.index');
    }

}
