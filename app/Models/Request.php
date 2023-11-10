<?php

namespace App\Models;
use App\Models\RequestMessage;

class Request extends Model
{
    public $routesPrefix = 'requests';
    protected $fillable = [
        "id",
        "request",
    ];
    public function messages()
    {
        return $this->hasMany(RequestMessage::class);
    }
}