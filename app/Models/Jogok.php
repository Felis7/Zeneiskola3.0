<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogok extends Model
{
    use HasFactory;
    public $table = "user_jogok";
    protected $primaryKey = 'ujo_id';
    public $timestamps = false;
    protected $guarded = [];
}
