<?php

namespace App;
use App\employee;
use Illuminate\Database\Eloquent\Model;

class documentation extends Model
{
    protected $table='documentations';
    public $primaryKey ='id';
    public $string = ['doc_file1','file_size'];
    public $timestamps = true;
    public function employee(){
        return $this->belongsTo('App\employee');
    }
}
