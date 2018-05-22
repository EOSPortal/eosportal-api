<?php

namespace App\Http\Controllers;

use App\Chain;
use App\Http\Resources\Chain as ChainResource;

class ChainController extends Controller
{
    public function index()
    {
        return new ChainResource(Chain::paginate($this->pageSize));
    }
    
    public function show($chain_id)
    {
        return new ChainResource(Chain::findOrFail($chain_id));
    }

}
