<?php

namespace Sisti;

use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = "indexes";
    protected $fillable = ['type_doc', 'patient_id', 'sex', 'number_record', 'name', 'last_name', 'birthdate', 'admission_date', 'egress_date', 'anotherc_id', 'observation', 'user_id', 'parish_id'];

    public function user(){

        return $this->belongsTo(User::class);
    } 

    public function triage(){

        return $this->belongsTo(Triage::class);
    }

    public function foreigncountry(){

        return $this->belongsTo(ForeignCountry::class);
    } 

    public function parish(){

        return $this->belongsTo(Parish::class);
    } 


}
