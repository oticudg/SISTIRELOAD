<?php

namespace Sisti;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = "indexes";
    protected $fillable = ['type_doc', 'patient_id', 'sex', 'number_record', 'name', 'last_name', 'birthdate', 'admission_date', 'egress_date', 'anotherc_id', 'observation', 'user_id', 'parish_id'];
}
