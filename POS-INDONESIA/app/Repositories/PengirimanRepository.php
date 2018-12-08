<?php

namespace App\Repositories;

use App\Models\Pengiriman;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PengirimanRepository
 * @package App\Repositories
 * @version December 8, 2018, 12:24 pm UTC
 *
 * @method Pengiriman findWithoutFail($id, $columns = ['*'])
 * @method Pengiriman find($id, $columns = ['*'])
 * @method Pengiriman first($columns = ['*'])
*/
class PengirimanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'berat',
        'harga',
        'pelanggan_id',
        'barang_id',
        'jenisbarang_id',
        'paket_id',
        'kantorcabang_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pengiriman::class;
    }
}
