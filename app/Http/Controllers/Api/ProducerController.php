<?php

namespace App\Http\Controllers\Api;

use App\Chain;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\Producer as ProducerResource;
use App\Http\Resources\Block as BlockResource;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function index($chain)
    {
        $chain = Chain::where('name', $chain)->firstOrFail();
        return new ProducerResource($chain->producers()->paginate($this->pageSize));
    }

    public function show($chain, $id)
    {
        $chain = Chain::where('name', $chain)->firstOrFail();
        return new ProducerResource($chain->producers()->where('producers.id', $id)->get());
    }

    public function blocks($chain, $id)
    {
        $chain = Chain::where('name', $chain)->firstOrFail();
        return new BlockResource($chain->blocks()->where('blocks.producer_id', $id)->paginate($this->pageSize));
    }

}
