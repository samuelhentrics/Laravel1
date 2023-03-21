<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model{
	protected $primaryKey = 'codeReservation';
	protected $fillable = ['codeReservation','dateReservation','dateAller','dateRetour'];

	// $timestamps = false;

	public function client(){
		return $this->belongsTo('App\client');
	}

	public function DossierLocation(){
		return $this->hasOne('App\DossierLocation');
	}

	public function vehicules(){
		return $this->belonsToMany('App\Vehicule');
	}

}