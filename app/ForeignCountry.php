<?php
namespace Sisti;
use Illuminate\Database\Eloquent\Model;
class ForeignCountry extends Model
{
   	protected $table = "foreigncountries";
    protected $fillable = ['foreign_country'];
    public function new_indexes(){
        return $this->hasMany(NewIndex::class);
    }  
}