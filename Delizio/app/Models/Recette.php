<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Step;
use App\Models\User;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Ustencil;
use App\Models\Categorie;
use App\Models\Ingredient;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Recette extends Model
{
    use HasFactory, Likeable;

    protected $fillable = ['main_image', 'tag', 'ingredient', 'quantite', 'description', 'categorie', 'title', 'summary', 'description', 'likes', 'temps_cuisson', 'temps_preparation', 'temps_repos', 'calories', 'gras', 'proteines', 'carbohydrates', 'cholesterole', 'budget', 'difficulte', 'video', 'images', 'user_id', 'categorie_id'];
    /**
     * Get the user associated with the Recette
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */


    /**
     * Get all of the comments for the Recette
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }
    public function ustencils()
    {
        return $this->hasMany(Ustencil::class, 'ustencil_id');
    }

    public function notes()
    {
        return $this->hasMany(Note::class, 'note_id');
    }

    public function steps()
    {
        return $this->hasMany(Step::class, 'step_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'image_id');
    }


    public function ingredients()
    {
        return $this->hasMany(Ingredient::class, 'ingredient_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
