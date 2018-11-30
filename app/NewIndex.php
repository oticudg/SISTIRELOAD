<?php

namespace Sisti;
use Illuminate\Database\Eloquent\Model;

class NewIndex extends Model
{
    protected $table = "new_indexes";
    protected $fillable = [
        'type_doc',
        'patient_id',
        'sex',
        'number_record',
        'name',
        'last_name',
        'birthdate',
        'triage_id',
        'admission_date',
        'egress_date',
        'anotherc_id',
        'address',
        'observation',
        'user_id',
        'parish_id',
        'updateu_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    } 

    public function updateu()
    {
        return $this->belongsTo(User::class);
    } 

    public function triage()
    {
        return $this->belongsTo(Triage::class);
    }

    public function foreignCountry()
    {
        return $this->belongsTo(ForeignCountry::class, 'anotherc_id');
    } 

    public function parish()
    {
        return $this->belongsTo(Parish::class, 'parish_id');
    } 
}