<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class diak_orarend extends Model
{
    use HasFactory;
    public $table = "diak_orarend";
    protected $primaryKey = 'do_id';
    public $timestamps = false;
    protected $guarded = [];

}
