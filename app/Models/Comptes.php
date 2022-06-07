<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    protected $fillable  = [  'cne','nom','prenom','adresse','ville','email' ] ;
}
