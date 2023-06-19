<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Organisateur extends Model
{
    use HasFactory;
    public function users():HasOne{
        return $this->hasOne(User::class,"id");
    }

    protected $fillable = [
        'nom',
        'prenom',
        'contact',
        'email',
        'motDePasse',
    ];

}
