<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pelanggan
 * @package App\Models
 * @version December 8, 2018, 12:28 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Pengiriman
 * @property string nama
 * @property string pass
 */
class Pelanggan extends Model
{
    use SoftDeletes;

    public $table = 'pelanggan';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nama',
        'pass'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string',
        'pass' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pengirimen()
    {
        return $this->hasMany(\App\Models\Pengiriman::class);
    }
}
