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
    

    public function tantargy(): BelongsToMany{
        return $this->belongsToMany(Tantargy::class,'nev',"tanar_id","tantargy_id");
    }
    public function ertekeles(): BelongsToMany{
        return $this->belongsToMany(Tantargy::class,'star',"tanar_id","tan_ert_id");
    }
    public function orarend(): BelongsToMany{
        return $this->belongsToMany(Tantargy::class,'datum',"tanar_id","do_id");
    }
}
