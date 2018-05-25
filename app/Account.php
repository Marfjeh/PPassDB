<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
  protected $fillable = [
    'name', 'url', 'username', 'password', 'WriteGroup', 'ReadGroup', 'Tagid', 'Description', 'ChangeQueue'
  ];
}
