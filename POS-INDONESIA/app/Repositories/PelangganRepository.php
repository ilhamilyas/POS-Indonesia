<?php

namespace App\Repositories;

use App\Models\Pelanggan;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PelangganRepository
 * @package App\Repositories
 * @version December 8, 2018, 12:28 pm UTC
 *
 * @method Pelanggan findWithoutFail($id, $columns = ['*'])
 * @method Pelanggan find($id, $columns = ['*'])
 * @method Pelanggan first($columns = ['*'])
*/
class PelangganRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'pass'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pelanggan::class;
    }
}
