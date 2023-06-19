<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Evenements extends Model
{
    use HasFactory;

    public function Participant():HasMany{
        return $this->HasMany(Participant::class);
    }

    protected $fillable = [
        "nom",
        "montant",
        "date",
        "adresse"
    ];
}
