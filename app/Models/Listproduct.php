<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listproduct extends Model
{

    use HasFactory;
    public function livraison(){
$this->hasOne('App\Models\Livraison');
    }
}
