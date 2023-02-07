<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $table = 'etudiant';
    protected $primaryKey = 'id';
    protected $fillable = ['Nom','Prenom','Semestre','Matiere','Note1','Examen'];
}
