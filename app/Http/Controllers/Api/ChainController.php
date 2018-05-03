<?php

namespace App\Http\Controllers\Api;

use App\Chain;
use App\Http\Controllers\Controller;
use App\Http\Resources\Chain as ChainResource;
use Illuminate\Http\Request;

class ChainController extends Controller
{
    public function index()
    {
        return new ChainResource(Chain::all());
    }

}
