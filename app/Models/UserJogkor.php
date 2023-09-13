<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJogkor extends Model
{
    use HasFactory;
    public $table="user_jogkorok";
    public $timestamps = false;
    public $primaryKey ="uj_id";
    public $guarded = [];
}
