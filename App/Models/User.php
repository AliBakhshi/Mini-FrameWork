<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $fillable = ['first_name','last_name','mobile','email','address','password'];


    public function setPasswordAttribute($password){
        return $this->attributes['password'] = md5($password);
    }

}