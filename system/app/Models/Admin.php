<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable {

    use Notifiable;

    protected $table = 'Admin';
    protected $primaryKey = 'idAdmin';

    protected $fillable = [
        'namaAdmin', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];




}