<?php

namespace App\Repositories;

use App\Models\Kantorcabang;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class KantorcabangRepository
 * @package App\Repositories
 * @version December 8, 2018, 12:27 pm UTC
 *
 * @method Kantorcabang findWithoutFail($id, $columns = ['*'])
 * @method Kantorcabang find($id, $columns = ['*'])
 * @method Kantorcabang first($columns = ['*'])
*/
class KantorcabangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'namakantorcabang',
        'alamat'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Kantorcabang::class;
    }
}
