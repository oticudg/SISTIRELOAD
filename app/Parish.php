<?php
namespace Sisti;
use Illuminate\Database\Eloquent\Model;
class Parish extends Model
{
    protected $table = "parishes";
    protected $fillable = ['parish', 'municipality_id'];
    public function new_indexes(){
        return $this->hasMany(NewIndex::class);
    } 
    public function municipalities(){
        return $this->belongsTo(Municipality::class, 'municipality_id');
    } 
}