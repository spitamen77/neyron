<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 05.09.2019 16:32
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class TestBall extends Model
{
    protected $table = 'test_ball';

    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'test_id',
        'ball',

    ];

    protected $casts = [
        'user_id' =>'int',
        'test_id' =>'int',
        'ball' =>'float',

    ];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function test()
    {
        return $this->hasOne(Tests::class,'id','test_id');
    }

    public static function sum($user_id)
    {
        return self::where('user_id',$user_id)->sum('ball');
    }

    public static function level($user_id)
    {
        $ball = self::sum($user_id);
        if ($ball<1000) return 0;
        elseif ($ball<3300) return 1;
        elseif ($ball<3800) return 2;
        elseif ($ball<4200) return 3;
        elseif ($ball<4800) return 4;
        elseif ($ball<5000) return 5;
        elseif ($ball<5900) return 6;
        elseif ($ball<6800) return 7;
        elseif ($ball<7500) return 8;
        elseif ($ball<8000) return 9;
        else return 10;
    }

}