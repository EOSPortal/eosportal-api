<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Producer as ProducerResource;
use App\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function index()
    {
        return new ProducerResource(Producer::all());
    }

    public function show($id)
    {
        return new ProducerResource(Producer::all());
    }

}
