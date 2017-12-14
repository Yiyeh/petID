<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
    	'user_id', 'name', 'lastName1', 'lastName2', 'birthday', 'file',
		'country', 'city', 'gender', 'specie', 'owner', 'phone', 'signature', 'lost',
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

}
