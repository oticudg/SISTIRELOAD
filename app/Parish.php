<?php

namespace Sisti;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $table = "parishes";
    protected $fillable = ['parish', 'municipality_id'];

     public function indexes(){

        return $this->hasMany(Index::class);
    } 

    public function municipalities(){

        return $this->belongsTo(Municipality::class, 'municipality_id');
    } 
}
