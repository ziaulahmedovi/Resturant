<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerMail extends Model
{
    protected $fillable=['CusName','email','phoneNumber','mail'];
}
