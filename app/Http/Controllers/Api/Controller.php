<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as AppController;

class Controller extends AppController
{
    public function __construct()
    {
        $this->pageSize = config('app.page_size');
    }

}