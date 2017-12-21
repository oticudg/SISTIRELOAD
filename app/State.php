<?php
namespace Sisti;
use Illuminate\Database\Eloquent\Model;
class State extends Model
{
    protected $table = "states";
    protected $fillable = ['state'];
    public function municipalities(){
        return $this->hasMany(Municipality::class);
    } 
}
