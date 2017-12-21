<?php
namespace Sisti;
use Illuminate\Database\Eloquent\Model;
class Triage extends Model
{
    protected $table = "triages";
    protected $fillable = ['triage'];
    public function indexes(){
        return $this->hasMany(Index::class);
    } 
}