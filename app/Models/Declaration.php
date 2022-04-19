<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Declaration
 * @package App\Models
 * @version April 18, 2022, 1:02 am UTC
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $paiments
 * @property integer $user_id
 * @property integer $annee
 * @property string $numeroCellulaire
 * @property integer $numeroAppart
 * @property string $codePostal
 * @property string $ville
 * @property string $province
 * @property string $dateArrivCan
 * @property string $declarationAnnPrecedente
 * @property string $occupation
 * @property string $situationMatrimoniale
 */
class Declaration extends Model
{

    use HasFactory;

    public $table = 'declarations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'annee',
        'numeroCellulaire',
        'numeroAppart',
        'codePostal',
        'ville',
        'province',
        'dateArrivCan',
        'declarationAnnPrecedente',
        'occupation',
        'situationMatrimoniale'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'annee' => 'integer',
        'numeroCellulaire' => 'string',
        'numeroAppart' => 'integer',
        'codePostal' => 'string',
        'ville' => 'string',
        'province' => 'string',
        'dateArrivCan' => 'date',
        'declarationAnnPrecedente' => 'string',
        'occupation' => 'string',
        'situationMatrimoniale' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'annee' => 'required|integer',
        'numeroCellulaire' => 'required|string|max:255',
        'numeroAppart' => 'required|integer',
        'codePostal' => 'required|string|max:255',
        'ville' => 'required|string|max:255',
        'province' => 'required|string|max:255',
        'dateArrivCan' => 'required',
        'declarationAnnPrecedente' => 'required|string|max:255',
        'occupation' => 'required|string|max:255',
        'situationMatrimoniale' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paiments()
    {
        return $this->hasMany(\App\Models\Paiment::class, 'declaration_id');
    }
}
