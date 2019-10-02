<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://code.uz
 * Content: "Simplex CMS"
 * Site: http://simplex.uz
 * Date: 14.08.2019 17:07
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Viloyat extends Model
{
    protected $table = 'viloyat';

//    public $timestamps = false;
    protected $fillable = [
        'name_uz',
        'status',
        'name_ru',

    ];

    protected $casts = [
        'name_uz' =>'string',
        'name_ru' =>'string',
        'status' =>'int',

    ];

}