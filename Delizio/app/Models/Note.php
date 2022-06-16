<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['note'];

    /**
     * Get the user associated with the Note
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }

    /**
     * Get the user associated with the Note
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function recette()
    {
        return $this->belongsTo(Recette::class, 'recette_id');
    }
}