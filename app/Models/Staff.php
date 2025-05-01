<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    
    protected $fillable = [
        'name',
        'job',
        'photo',
    ];
    
    public function services()
{
    return $this->belongsToMany(Service::class);
}
    
}
