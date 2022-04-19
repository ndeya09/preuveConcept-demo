<?php

namespace App\Repositories;

use App\Models\Paiement;
use App\Repositories\BaseRepository;

/**
 * Class PaiementRepository
 * @package App\Repositories
 * @version April 18, 2022, 1:03 am UTC
*/

class PaiementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'declaration_id',
        'datePaiment',
        'montant',
        'statut'
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
        return Paiement::class;
    }
}
