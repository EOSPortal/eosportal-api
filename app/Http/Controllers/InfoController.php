<?php

namespace App\Http\Controllers;

use App\Chain;
use App\Http\Resources\Info as InfoResource;

class InfoController extends Controller
{
    public function index($chain_id)
    {
        $chain = Chain::findOrFail($chain_id);
        return new InfoResource($chain->infos()->paginate($this->pageSize));
    }

}
