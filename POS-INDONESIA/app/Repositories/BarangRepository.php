<?php

namespace App\Repositories;

use App\Models\Barang;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BarangRepository
 * @package App\Repositories
 * @version December 8, 2018, 12:21 pm UTC
 *
 * @method Barang findWithoutFail($id, $columns = ['*'])
 * @method Barang find($id, $columns = ['*'])
 * @method Barang first($columns = ['*'])
*/
class BarangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama',
        'Tujuan'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Barang::class;
    }
}
