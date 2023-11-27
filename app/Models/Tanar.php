<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tanar extends Model
{
    use HasFactory;
    public $table = "tanar_profilok";
    public $primaryKey = 'tid';
    public $timestamps = false;
    public $guarded = [];
    

    public function tanarok_tantargyai(): BelongsToMany{
        return $this->belongsToMany(Tantargy::class,'tanarok_tantargyai',"tid","tantargy_id");
    }
    public function diak_orarend(): BelongsToMany{
        return $this->belongsToMany(diak_orarend::class,'diak_orarend', 'tid',"tanar_id");
    }
    public function tanarok_orarendje(): BelongsToMany{
        return $this->belongsToMany(tanarok_orarendje::class,'tanarok_orarendje',"tid","tanar_id");
    }
    public function user_details(): HasOne {
        return $this->hasOne(User::class, "uid","tid");
    }
}
