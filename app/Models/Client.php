<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model{
	protected $primaryKey = 'NumeroClient';
	protected $fillable = ['numeroClient', 'nom','email','carteBancaire'];

    public function Reservation(){
        return $this->hasMang('app/reservation'); 
    }

}