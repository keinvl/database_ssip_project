<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    
    protected $fillable = [
        'name',
    ];
    
    public function staff()
    {
        return $this->belongsToMany(Staff::class);
    }    
}
