<?php

namespace App;

// use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hrshadhin\Userstamps\UserstampsTrait;

class User extends Authenticatable
{
    // use Notifiable;
    use SoftDeletes;
    use UserstampsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname','branch','employeeid', 'email','phonenumber','address','gender', 'password',

    ];


    public function posts(){
        return $this->hasMany(Blog::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public  function role()
    {
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }
    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;

    }
    public function  hasRole($role){
        if($this->role()->where('name', $role)->first()){
            return true;
        }
        return false;
    }

    //sport


}