<?php

namespace Sisti;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = "municipalities";
    protected $fillable = ['municipality', 'state_id'];
}
