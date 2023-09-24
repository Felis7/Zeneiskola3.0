<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tanarok_tantargyai extends Model
{
    use HasFactory;
    public $table = "tanarok_tantargyai";
    protected $primaryKey = 'tan_tan_id';
    public $timestamps = false;
    protected $guarded = [];

}
