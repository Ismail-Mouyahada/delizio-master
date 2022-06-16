<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = ['step_title','step_details'];
    public function recette()
        {
            return $this->belongsTo(Recette::class, 'recette_id');
        }
}