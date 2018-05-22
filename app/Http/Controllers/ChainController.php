<?php

namespace App\Http\Controllers;

use App\Chain;
use App\Http\Resources\Chain as ChainResource;
use App\Chain as ChainModel;
use Illuminate\Http\Request;

class ChainController extends Controller
{
    public function index()
    {
        return new ChainResource(Chain::paginate($this->pageSize));
    }

    public function store(Request $request)
    {
        $url = $request->input('chain_url');
        $chain = new ChainModel();
        $chain->api_url = $url;
        $chain->save();
    }
}
