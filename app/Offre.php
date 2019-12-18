<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'id_user','titre','lieu_de_travail','secteur','description_de_poste' ,
        'nombre_de_poste' ,'date_de_publication' ,'date_limite' ,
        'profil_recherche','type_de_contrat'
    ];

    /**
     * Get the candidat that owns the offre.
     */
    public function candidat()
    {
        return $this->belongsTo('App\Candidat');
    }

    /**
     * Get the user record associated with the offre.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
