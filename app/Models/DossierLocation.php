<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierLocation extends Model{
	protected $primaryKey = 'idLocation';
	protected $fillable = ['idLocation', 'paye'];

	public function reservation(){
		return $this->belongTo('App\Reservation');
	}
}

