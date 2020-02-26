<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    public $fillable=['nom','prenom','date','email','telephone','grade','unite','texte','information_complementaire'];
}
