<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanarok_orarendje extends Model
{
    use HasFactory;
    public $table = "tanarok_orarendje";
    protected $primaryKey = 'to_id';
    public $timestamps = false;
    protected $guarded = [];
}
