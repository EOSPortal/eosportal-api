<?php

namespace App\Http\Controllers;

use App\Producer;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProducersController extends Controller
{
    public function all()
    {
        return DataTables::of(Producer::query())->make(true);
    }

    public function index()
    {
        return view('tables.producer.index');
    }

}
