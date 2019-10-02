<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://code.uz
 * Content: "Simplex CMS"
 * Site: http://simplex.uz
 * Date: 15.08.2019 10:27
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tuman extends Model
{
    protected $table = 'tuman';

//    public $timestamps = false;
    protected $fillable = [
        'name_uz',
        'status',
        'name_ru',
        'viloyat_id',

    ];

    protected $casts = [
        'name_uz' =>'string',
        'name_ru' =>'string',
        'status' =>'int',
        'viloyat_id' =>'int',

    ];

}