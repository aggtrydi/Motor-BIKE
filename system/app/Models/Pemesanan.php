<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    

     protected $fillable = ['id_pemesanan', 'idmotor'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function motor(){
    	return $this->belongsTo('App\Models\Motor', 'idmotor');
    }
        
}