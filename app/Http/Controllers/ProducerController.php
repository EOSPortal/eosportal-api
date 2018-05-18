<?php

namespace App\Http\Controllers;

use App\Chain;
use App\Producer;
use App\Http\Resources\Producer as ProducerResource;
use App\Http\Resources\Block as BlockResource;

class ProducerController extends Controller
{
    public function index($chain_id)
    {
        $chain = Chain::findOrFail($chain_id);
        return new ProducerResource($chain->producers()->paginate($this->pageSize));
    }

    public function show($producer_id)
    {
        $producer = Producer::findOrFail($producer_id);
        return new ProducerResource($producer);
    }

    public function blocks($producer_id)
    {
        $producer = Producer::findOrFail($producer_id);
        return new BlockResource($producer->blocks()->paginate($this->pageSize));
    }

}
