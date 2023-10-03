<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jogkor extends Model
{
    use HasFactory;
    public $table = "user_jogkorok";
    protected $primaryKey = 'uj_id';
    public $timestamps = false;
    protected $guarded = [];

public function user_jogok(): BelongsToMany{
    return $this->belongsToMany(user_jogok::class,'user_jogok','uj_id', 'uj_id');
}
}
