<?php

use App\Block;
use App\Chain;
use App\Info;
use App\Producer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chain = factory(Chain::class)->create();
        for($p=1;$p<22;$p++) {
            $producer = factory(App\Producer::class)->make();
            $chain->producers()->save($producer);
            for($b=1;$b<13;$b++) {
                $block = factory(App\Block::class)->make();
                $producer->blocks()->save($block);
            }
            for($i=1;$i<13;$i++) {
                $info = factory(App\Info::class)->make();
                $info->head_producer_id = $producer->id;
                $producer->infos()->save($info);
            }
        }
    }
}
