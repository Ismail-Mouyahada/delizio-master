<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = ['main_image','title','summary','description','likes', 'temps_cuisson', 'temps_preparation', 'temps_repos','budget','defficulte','video', 'images'];
}