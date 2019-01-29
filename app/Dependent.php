<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $fillable=['under_employeeid','club_id','name','surname','dateofbirth','gender','phonenumber'];


}
