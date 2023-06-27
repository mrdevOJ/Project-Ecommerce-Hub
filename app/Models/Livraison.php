<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'listproduct_id',
        'livreur_id',
        'date_livrainson',
    ];
    public function commandes(){
        $this->hasOne('App\Models\Listproduct');
            }
}
