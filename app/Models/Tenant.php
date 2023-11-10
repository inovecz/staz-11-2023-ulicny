<?php

namespace App\Models;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Tenant extends Model
{

    public $routesPrefix = 'tenants';

    protected $fillable = [
        "id",
        "firm_name",
        "password",

    ];
    
    
    
    // generovanie uuid
    
    /* protected $keyType = 'string';
    public $incrementing = false;
    public static function boot() {
        parent::boot();
        
        static::creating(function ($model) {
            $model->id = Str::uuid();
            Class Request extends Model 
            { public function requests(): HasMany
                {   
                    return $this->hasMany(Request::class);
                }
            }
            
        });
    }
    */
}
    



