<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $table = 'programmes';

    public function institutions()
    {
        return $this->belongsToMany(Institution::class, 'institution_id');
    }
}
