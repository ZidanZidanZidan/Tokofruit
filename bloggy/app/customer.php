<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //table
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    public $timestamps = false;
    //atribut
    protected $fillable = [
      'customer_id',
      'name',
      'address'
    ];

}
