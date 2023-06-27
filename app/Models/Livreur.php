<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'prenom',
        'CIN',
    ];
    public function commands(){
        return $this->hasMany('App\Models\Livraison');

    }


}
