<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Invoice;

class Address extends Model
{
    public function invoice ()
    {
        return $this->belongsTo('App\Invoice');
    }
}
