<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FrontPageController extends Controller
{
    public function producerList()
    {
        $producers = DB::table('producers')
            ->select(['name', 'organization', 'contact',
                DB::raw('max(blocks.height) as num_blocks'), DB::raw('max(blocks.created_at) as created_at')])
            ->join('blocks', 'producers.id', '=', 'blocks.producer_id')
            ->groupBy('producers.id')
            ->orderBy('num_blocks', 'DESC')
            ->orderBy('name')
            ->get();

        return view('producer-list', ['collection' => $producers]);
    }
}
