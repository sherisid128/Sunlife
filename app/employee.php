<?php

namespace App;
use App\documentation;
use App\certification;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table='employees';
    public $primaryKey ='id';
    public $string = ['firstName','lastName','email','city','state','address1','address2','zipCode','logo'];
    public $timestamps = true;
    public function documentation(){
      return  $this->hasMany('App\documentation');
    }
    public function certification(){
     return   $this->hasMany('App\certification');
    }
}
