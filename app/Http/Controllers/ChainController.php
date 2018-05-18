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

}
