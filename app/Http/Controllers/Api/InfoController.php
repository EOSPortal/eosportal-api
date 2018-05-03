<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Info as InfoResource;
use App\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return new InfoResource(Info::all());
    }

}
