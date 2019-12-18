<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_complet','telephone','email','message_motivation','cv','id_offre',
    ];

    /**
     * Get the offres record associated with the candidat.
     */
    public function offres()
    {
        return $this->hasMany('App\Offre');
    }
}
