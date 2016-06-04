<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $fillable = [
      'name',
      'description',
      'time',
      'date',
    ];

    protected $dates = [
      'date',
      'created_at',
      'updated_at',
    ];

    protected $dateFormat = 'Y-m-d';

    protected $hidden = [
      'created_at',
      'updated_at',
      'users_id',
    ];

    public function user(){
      return $this->belongsTo('App\User', 'users_id');
    }
}
