<?php
namespace Sisti;
use Illuminate\Database\Eloquent\Model;
class Municipality extends Model
{
    protected $table = "municipalities";
    protected $fillable = ['municipality', 'state_id'];
     public function parishes(){
        return $this->hasMany(Parish::class);
    } 
      public function states(){
        return $this->belongsTo(State::class, 'state_id');
    } 
}
