<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tantargy extends Model
{
    use HasFactory;
    public $table = "tantargyak";
    public $timestamps = false;
    protected $primaryKey = "tantargy_id";
    protected $guarded = [];
}
