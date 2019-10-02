<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://code.uz
 * Content: "Simplex CMS"
 * Site: http://simplex.uz
 * Date: 16.08.2019 15:28
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tests extends Model
{
    protected $table = 'tests';

    public $timestamps = false;
    protected $primaryKey = 'test_id';

    protected $fillable = [
        'test_id',
        'user_id',
        'test_type',
        'operation_type',
        'used_number',
        'operation_number',
        'question_speed',
        'min_number',
        'max_number',
        'user_answer',
        'true_answer',
        'true_question',
        'game_time',
        'participated_numbers',
        'ball',

    ];

    protected $casts = [
        'user_id' =>'int',
        'test_type' =>'int',
        'operation_type' =>'int',
        'used_number' =>'string',
        'operation_number' =>'int',
        'question_speed' =>'float',
        'min_number' =>'int',
        'max_number' =>'int',
        'user_answer' =>'float',
        'true_answer' =>'float',
        'true_question' =>'int',
        'game_time' =>'int',
        'participated_numbers' =>'string',
        'ball' =>'float',

    ];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function getTestType()
    {
        if ($this->test_type==1) return "Flesh";
        else return "Ovozli";
    }

    public function getNatija()
    {
        if ($this->true_question==1) return "To`g`ri";
        else return "Noto`g`ri";
    }

    public function getOperType()
    {
        if ($this->operation_type==1) return "+";
        elseif ($this->operation_type==0) return "-";
        else return "+/-";
    }

    public static function count($user_id)
    {
        return self::where('user_id',$user_id)->count();
    }

    public static function galaba($user_id)
    {
        return self::where('user_id',$user_id)->where('true_question',1)->count();
    }

    public static function maglub($user_id)
    {
        return self::where('user_id',$user_id)->where('true_question',0)->count();
    }

}