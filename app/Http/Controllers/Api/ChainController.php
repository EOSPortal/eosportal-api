<?php

namespace App\Http\Controllers\Api;

use App\Chain;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\Chain as ChainResource;
use Illuminate\Http\Request;

class ChainController extends Controller
{
    public function index()
    {
        return new ChainResource(Chain::paginate($this->pageSize));
    }

}
