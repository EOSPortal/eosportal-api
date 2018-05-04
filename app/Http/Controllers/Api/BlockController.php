<?php

namespace App\Http\Controllers\Api;

use App\Chain;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\Block as BlockResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlockController extends Controller
{
    public function index($chain)
    {
        $chain = Chain::where('name', $chain)->firstOrFail();
        return new BlockResource($chain->blocks()->paginate($this->pageSize));
    }

    public function show($chain, $id)
    {
        $chain = Chain::where('name', $chain)->firstOrFail();
        return new BlockResource($chain->blocks()->where('blocks.id', $id)->get());
    }

}
