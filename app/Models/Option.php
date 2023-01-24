<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $table ='options';
    protected $guarded = [];

    
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}