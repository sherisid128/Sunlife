<?php

namespace App;
use App\employee;
use Illuminate\Database\Eloquent\Model;

class certification extends Model
{
    protected $table='certifications';
    public $primaryKey ='id';
    public $string = ['cert_file','file_size','expires_at'];
    public $timestamps = true;
    public function employee(){
       return $this->belongsTo('App\employee');
    }
}
