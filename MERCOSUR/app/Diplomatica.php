<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomatica extends Model
{
 protected $table='reladiplo';

 protected $primaryKey = 'iddiplo';
 
 protected $fillable =  array('titulo','fecha','detalle');

 protected $hidden = ['created_at','updated_at'];
}
