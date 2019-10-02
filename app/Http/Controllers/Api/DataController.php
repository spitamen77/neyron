<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://code.uz
 * Content: "Simplex CMS"
 * Site: http://simplex.uz
 * Date: 12.04.2019 19:15
 */

namespace App\Http\Controllers\Api;

use App\TestBall;
use App\Tests;
use App\User;

use App\Viloyat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['viloyat','addTest','weather','kurs','obhavo']);
    }

    public function viloyat()
    {
        $category = Viloyat::where('status', 1)->select('id','name_ru','name_uz')->get()->toArray();
        return response()->json([
            'code' => 0,
            'viloyat' => $category
        ]);

    }

    public function addTest(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        if (isset($user)){}
        else {
            return response()->json(
                [
                    'code' => 1,
                    'test_id' => 0,
                    'user_id' => $request->user_id,
                    'message' => 'User topilmadi'
                ],403);
        }
        $test = Tests::where('user_id',$request->user_id)
            ->where('operation_type',$request->operation_type)
            ->where('used_number',$request->used_number)
            ->where('operation_number',$request->operation_number)
//            ->where('question_speed',$request->question_speed)
            ->where('min_number',$request->min_number)
            ->where('max_number',$request->max_number)
            ->where('true_question',1)
            ->where('ball',$request->ball)
            ->where('participated_numbers',$request->participated_numbers)
            ->first();

        $withdraw = Tests::create([
            'user_id' => $request->user_id,
            'test_type' => $request->test_type,
            'operation_type' => $request->operation_type,
            'used_number' => $request->used_number, //
            'operation_number' => $request->operation_number,
            'question_speed' => $request->question_speed,
            'min_number' => $request->min_number,
            'max_number' => $request->max_number,
            'user_answer' => $request->user_answer,
            'true_answer' => $request->true_answer,
            'true_question' => $request->true_question,
            'game_time' => $request->game_time,
            'participated_numbers' => $request->participated_numbers, //
            'ball' => $request->ball,
        ]);

        if(isset($test)) {}
        else {
            if ($request->true_question==1)
            $withdraw = TestBall::create([
                'user_id' => $request->user_id,
                'test_id' => $withdraw->test_id,
                'ball' => $request->ball,
            ]);
        }

        return response()->json([
            'code' => 0,
            'test_id' => $withdraw->test_id,
            'user_id' => $request->user_id,
            'message' => 'Ma`lumot saqlandi'
        ]);
    }

    public function getHistory(Request $request)
    {
        $limit = $request->perpage;
        $offset = $request->page-1;
        if (($limit==null) || ($offset==null)) {
            $offset=0; $limit=50;
        }
        $user = Tests::where('user_id',$request->user_id)
            ->orderBy('test_id', 'desc')
            ->skip($offset*$limit)->take($limit)
            ->get()->toArray();
        return response()->json([
            'code' => 0,
            'test' => $user
        ]);
    }

    public function testView($id)
    {
        $tests = Tests::where('test_id',$id)->where('user_id', Auth::user()->id)->first();
        if (isset($tests)){
            return response()->json([
                'code' => 0,
                'test' => $tests
            ]);
        }
        else {
            return response()->json([
                'code' => 1,
                'test' => (object)[]
            ]);
        }
    }

}
