<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chain extends Model
{
    public function producers()
    {
        return $this->hasMany('App\Producer');
    }

    public function blocks()
    {
        return $this->hasManyThrough('App\Block', 'App\Producer');
    }

    public function infos()
    {
        return $this->hasManyThrough('App\Info', 'App\Producer');
    }

}
