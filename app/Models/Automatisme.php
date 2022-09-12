<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automatisme extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom_automatisme',
        'projet',
        'campagne',
        'created_by'
    ];



    #################relations######################

    public function conditions()
    {
        return $this->hasMany(Condition::class,'automatisme_id');
    }

    public function actions()
    {
        return $this->hasMany(Action::class,'automatisme_id');
    }

}
