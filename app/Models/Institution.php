<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    
    protected $table = 'institutions';

    public function programme()
    {
        return $this->hasMany(Programme::class);
    }

}
