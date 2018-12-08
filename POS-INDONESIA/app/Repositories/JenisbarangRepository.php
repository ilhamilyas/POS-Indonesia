<?php

namespace App\Repositories;

use App\Models\Jenisbarang;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class JenisbarangRepository
 * @package App\Repositories
 * @version December 8, 2018, 12:26 pm UTC
 *
 * @method Jenisbarang findWithoutFail($id, $columns = ['*'])
 * @method Jenisbarang find($id, $columns = ['*'])
 * @method Jenisbarang first($columns = ['*'])
*/
class JenisbarangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jenisbarang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jenisbarang::class;
    }
}
