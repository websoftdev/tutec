<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','numero_control', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function isAlumno(){

        if($this->role->num_rol==1 && $this->is_active==1){
            return true;
        }
        return false;
    }

    public function isTutor(){

        if($this->role->num_rol==2 && $this->is_active==1){
            return true;
        }
        return false;
    }

}
