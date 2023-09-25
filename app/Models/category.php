<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class category
 * @package App\Models
 * @version December 2, 2021, 8:51 am UTC
 *
 * @property string $namecategory
 */
class category extends Model
{

    public $table = 'categories';
    



    public $fillable = [
        'namecategory','link','details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'namecategory' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'namecategory' => 'required'
    ];

    
}
