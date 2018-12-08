<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Paket
 * @package App\Models
 * @version December 8, 2018, 12:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Pengiriman
 * @property string jenispaket
 * @property string value
 */
class Paket extends Model
{
    use SoftDeletes;

    public $table = 'paket';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'jenispaket',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenispaket' => 'string',
        'value' => 'string'
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
