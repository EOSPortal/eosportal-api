<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    public function blocks()
    {
        return $this->hasMany('App\Block');
    }

    public function chain()
    {
        return $this->belongsTo('App\Chain');
    }

    public function infos()
    {
        return $this->hasMany('App\Info');
    }

}
