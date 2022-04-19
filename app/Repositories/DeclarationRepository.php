<?php

namespace App\Repositories;

use App\Models\Declaration;
use App\Repositories\BaseRepository;

/**
 * Class DeclarationRepository
 * @package App\Repositories
 * @version April 18, 2022, 1:02 am UTC
*/

class DeclarationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Declaration::class;
    }
}
