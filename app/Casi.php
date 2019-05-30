<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casi extends Model
{
    // protected $primaryKey = 'MaCS';

    protected $table = 'casy';
    protected $guarded = [];
    public $timestamps = false;

    // protected $primaryKey = null;
    // public $incrementing = false;
//     public function user()
// {
//     $this->hasOne(Casi::class);
//     $this->belongsTo(Casi::class);
// }
}
