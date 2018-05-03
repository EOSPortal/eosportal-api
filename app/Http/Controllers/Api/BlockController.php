<?php

namespace App\Http\Controllers\Api;

use App\Block;
use App\Http\Controllers\Controller;
use App\Http\Resources\Block as BlockResource;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function index()
    {
        return new BlockResource(Block::all());
    }

}
