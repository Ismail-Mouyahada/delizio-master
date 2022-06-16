<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = ['main_image','tag','ingredient','quantite','description','categorie','title','summary','description','likes', 'temps_cuisson', 'temps_preparation', 'temps_repos','calories','gras','proteines','carbohydrates','cholesterole','budget','difficulte','video', 'images'];
    /**
     * Get the user associated with the Recette
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    /**
     * Get all of the comments for the Recette
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function ustencils()
    {
        return $this->hasMany(Ustencil::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

}