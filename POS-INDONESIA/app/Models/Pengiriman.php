<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pengiriman
 * @package App\Models
 * @version December 8, 2018, 12:24 pm UTC
 *
 * @property \App\Models\Barang barang
 * @property \App\Models\Jenisbarang jenisbarang
 * @property \App\Models\Kantorcabang kantorcabang
 * @property \App\Models\Paket paket
 * @property \App\Models\Pelanggan pelanggan
 * @property string berat
 * @property string harga
 * @property integer pelanggan_id
 * @property integer barang_id
 * @property integer jenisbarang_id
 * @property integer paket_id
 * @property integer kantorcabang_id
 */
class Pengiriman extends Model
{
    use SoftDeletes;

    public $table = 'pengiriman';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'berat',
        'harga',
        'pelanggan_id',
        'barang_id',
        'jenisbarang_id',
        'paket_id',
        'kantorcabang_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'berat' => 'string',
        'harga' => 'string',
        'pelanggan_id' => 'integer',
        'barang_id' => 'integer',
        'jenisbarang_id' => 'integer',
        'paket_id' => 'integer',
        'kantorcabang_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function barang()
    {
        return $this->belongsTo(\App\Models\Barang::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function jenisbarang()
    {
        return $this->belongsTo(\App\Models\Jenisbarang::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kantorcabang()
    {
        return $this->belongsTo(\App\Models\Kantorcabang::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paket()
    {
        return $this->belongsTo(\App\Models\Paket::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pelanggan()
    {
        return $this->belongsTo(\App\Models\Pelanggan::class);
    }
}
