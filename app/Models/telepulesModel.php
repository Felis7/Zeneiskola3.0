<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepulesModel extends Model
{
    use HasFactory;
    protected $table = "telepules";
    public $fillable = ["telepules"];
    public $timestamps = false;
    protected $primaryKey = "id";
}
