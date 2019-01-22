<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    //table
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;
    //atribut
    protected $fillable = [
      'employee_id',
      'employee_name',
      'employee_address',
      'employee_phone_number'
    ];

}
