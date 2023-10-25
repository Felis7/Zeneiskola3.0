<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regisztracioModel extends Model
{
    use HasFactory;

    protected $table= "tanar_profilok";
    protected $fillable = ["nev", "leiras", "irsz", "telepules", "cim", "telefonszam", "email", "oradij"];
    protected $primarykey = "tanar_id";
}
