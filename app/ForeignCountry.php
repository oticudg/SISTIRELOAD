<?php

namespace Sisti;

use Illuminate\Database\Eloquent\Model;

class ForeignCountry extends Model
{
   	protected $table = "foreigncountries";
    protected $fillable = ['foreign_country'];
}
