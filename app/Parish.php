<?php

namespace Sisti;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $table = "parishes";
    protected $fillable = ['parish', 'municipality_id'];
}
