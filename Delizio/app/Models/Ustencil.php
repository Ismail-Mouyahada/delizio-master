<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ustencil extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'quantite'];



        /**
         * Get the user that owns the Ustencil
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function recette()
        {
            return $this->belongsTo(Recette::class, 'recette_id');
        }


}