<?php
/*
0- Web Admin
1- College Admin
2- Staff
3- Student
*/

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Roles
    public function isWebAdmin() {
      return $this->role == '0';
    }
    public function isCollegeAdmin() {
      return $this->role == '1';
    }
    public function isStaff() {
      return $this->role == '2';
    }
    public function isStudent() {
      return $this->role == '3';
    }
}
