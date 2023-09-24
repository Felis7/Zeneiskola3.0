<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tanar extends Model
{
    use HasFactory;
    public $table = "tanar_profilok";
    protected $primaryKey = 'tanar_id';
    public $timestamps = false;
    protected $guarded = [];
    

    public function tanarok_tantargyai(): BelongsToMany{
        return $this->belongsToMany(Tantargy::class,'tanarok_tantargyai',"tanar_id","tanar_id");
    }
    public function diak_orarend(): BelongsToMany{
        return $this->belongsToMany(diak_orarend::class,'diak_orarend', 'tanar_id',"tanar_id");
    }
    public function tanarok_orarendje(): BelongsToMany{
        return $this->belongsToMany(tanarok_orarendje::class,'tanarok_orarendje',"tanar_id","tanar_id");
    }
}
