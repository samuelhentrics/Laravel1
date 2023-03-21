<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model{
	protected $primaryKey = matricule;
	protected $fillable = ['matricule', 'model', 'nombredepace','prix','disponibilite'];

	public function reservations(){
		return $this->belongsToMany('App\Reservation');
	}
}

