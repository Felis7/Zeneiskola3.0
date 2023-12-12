<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class regisztracioModel extends Model
{
    use HasFactory;

    protected $table= "users";
    protected $fillable = ["nev", "email", "email_verified_at",	"password	remember_token"];
    protected $primarykey = "uid";
    public $timestamps = true; 
}
