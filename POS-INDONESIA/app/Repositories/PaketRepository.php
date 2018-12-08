<?php

namespace App\Repositories;

use App\Models\Paket;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaketRepository
 * @package App\Repositories
 * @version December 8, 2018, 12:27 pm UTC
 *
 * @method Paket findWithoutFail($id, $columns = ['*'])
 * @method Paket find($id, $columns = ['*'])
 * @method Paket first($columns = ['*'])
*/
class PaketRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenispaket',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paket::class;
    }
}
