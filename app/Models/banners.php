<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class banners
 * @package App\Models
 * @version December 1, 2021, 6:44 am UTC
 *
 * @property string $title
 * @property string $banner_image
 */
class banners extends Model
{

    public $table = 'banners';

    public static function boot()
    {
        parent::boot();

        static::updated(function ($instance) {
           
            Cache::forget('bannersRights');
            Cache::forget('bannerUnderSlider');
            Cache::forget('bannerUnderSale');
            Cache::forget('baners');
           
        });

        static::deleted(function ($instance) {
            Cache::forget('bannersRights');
            Cache::forget('bannerUnderSlider');
            Cache::forget('bannerUnderSale');
            Cache::forget('baners');
        });

        static::created(function ($instance) {
            Cache::forget('bannersRights');
            Cache::forget('bannerUnderSlider');
            Cache::forget('bannerUnderSale');
            Cache::forget('baners');
        });    
    }
    
    public $fillable = [
        
        'banner_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
       
        'banner_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       
        'image' => 'required|max:10000|mimes:jpg,jpeg, png',
        'title' => 'required',
        'link' => 'required',
    ];
    
    public static $rulesUpdate = [
       
        'image' => 'max:10000|mimes:jpg,jpeg, png',
        'title' => 'required',
        'link' => 'required',
    ];

    
}
