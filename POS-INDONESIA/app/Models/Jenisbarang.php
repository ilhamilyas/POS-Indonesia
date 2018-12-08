<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jenisbarang
 * @package App\Models
 * @version December 8, 2018, 12:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Pengiriman
 * @property string jenisbarang
 */
class Jenisbarang extends Model
{
    use SoftDeletes;

    public $table = 'jenisbarang';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'jenisbarang'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenisbarang' => 'string'
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
