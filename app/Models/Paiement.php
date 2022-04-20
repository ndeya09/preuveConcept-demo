<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Paiement
 * @package App\Models
 * @version April 18, 2022, 1:03 am UTC
 *
 * @property \App\Models\Declaration $declaration
 * @property integer $declaration_id
 * @property string|\Carbon\Carbon $datePaiment
 * @property number $montant
 * @property string $statut
 */
class Paiement extends Model
{

    use HasFactory;

    public $table = 'paiments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'declaration_id',
        'datePaiment',
        'montant',
        'statut'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'declaration_id' => 'integer',
        'datePaiment' => 'datetime',
        'montant' => 'float',
        'statut' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'datePaiment' => 'required',
        'montant' => 'required|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function declaration()
    {
        return $this->belongsTo(\App\Models\Declaration::class, 'declaration_id');
    }
}
