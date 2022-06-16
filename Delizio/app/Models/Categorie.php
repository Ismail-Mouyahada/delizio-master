<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['categorie'];
    /**
     * Get the user that owns the Categorie
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recette() 
    {
        return $this->belongsTo(Recette::class, 'recette_id');
    }
}