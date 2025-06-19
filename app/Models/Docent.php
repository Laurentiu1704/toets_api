<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Docent extends Model
{
    use HasFactory;
    
        public function vakken() 
        {
            return $this->hasMany(Vak::class);
        }

}
