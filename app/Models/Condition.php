<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'champs',
        'operator',
        'valeur',
        'automatisme_id',
    ];


    ###########relations#########################

    public function automatisme()
    {
        return $this->belongsTo(Automatisme::class,'automatisme_id','id');
    }





}
