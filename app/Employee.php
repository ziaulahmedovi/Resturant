<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['firstName','lastName','email','phoneNumber','fbUrl','jobStatus','salary','comment','empImage'];
}
