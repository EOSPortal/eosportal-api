<?php

namespace App\Http\Controllers\Api;

use App\Chain;
use App\Http\Controllers\Api\Controller;
use App\Http\Resources\Info as InfoResource;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index($chain)
    {
        $chain = Chain::where('name', $chain)->firstOrFail();
        return new InfoResource($chain->infos()->paginate($this->pageSize));
    }

}
