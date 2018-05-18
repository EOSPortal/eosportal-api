<?php

namespace App\Http\Controllers;

use App\Chain;
use App\Block;
use App\Http\Resources\Block as BlockResource;

class BlockController extends Controller
{
    public function index($chain_id)
    {
        $chain = Chain::findOrFail($chain_id);
        return new BlockResource($chain->blocks()->paginate($this->pageSize));
    }

    public function show($block_id)
    {
        $block = Block::findOrFail($block_id);
        return new BlockResource($block);
    }

}
