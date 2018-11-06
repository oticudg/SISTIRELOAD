<?php
namespace Sisti;
use Illuminate\Database\Eloquent\Model;
class Index extends Model
{
    protected $table = "indexes";
    protected $fillable = [
    'patient_id',
    'number_record',
    'name',
    'last_name',
    'birthdate',
    'triage_id',
    'observation'
    ];
    public function triage()
    {
        return $this->belongsTo(Triage::class);
    }

}