<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
	protected $fillable = [
		'user_id', 'title', 'file', 'country', 'city', 'commune', 'quanty', 'body',
	];

    public function user(){
    	return $this->belongsTo(User::class);
    }

}
