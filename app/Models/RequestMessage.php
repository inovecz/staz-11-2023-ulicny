<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestMessage extends Model
{
    public function request()
    {
        return $this->belongsTo(Request::class);
    }
}