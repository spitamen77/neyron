<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://code.uz
 * Date: 03.04.2019 11:52
 * Content: "Simplex CMS"
 * Site: http://simplex.uz
 */

namespace App\Http\Controllers\Api;


use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


//use PHPMailer;


class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','smsverify','login','signup','forgot','sendwebsms','passwordForgot']);
    }

    public function index()
    {
        return 'Api';
    }

    protected function credentials(Request $request)
    {
        if(is_numeric($request->get('phone'))){
            return ['phone'=>$request->get('phone'),'password'=>$request->get('password')];
        }
        return ['username'=>$request->get('phone'),'password'=>$request->get('password')];
    }

    public function login(Request $request)
    {
//        $credentials = request(['phone', 'password']);
        $credentials = $this->credentials($request);

        if(!Auth::attempt($credentials))
            return response()->json([
                'code' => 1,
                'user' =>(object)[],
                'message' => 'Telefon/parol hato terildi'
            ], 401);

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();

        $body= $request->user();
        $date = $body->created_at;
        unset($body->email_verified_at,
            $body->confirm,
            $body->email,
            $body->updated_at,
            $body->created_at);
        $body->reg_date = strtotime($date);
        $body->access_token=$tokenResult->accessToken;
        $body->token_type='Bearer';
        $body->expires_at=(int)time() + (7 * 24 * 60 * 60);

        return response()->json(
            [
                'code' => 0,
                'user'=>$request->user(),
                'message' => 'Success'
            ],200);

    }

    public function signup(Request $request)
    {
//        $request->validate([
//            'name' => 'required|string',
////            'email' => 'required|string|email',  // |unique:my_user
//            'phone' => 'required|string',   // |unique:my_user
//            'password' => 'required|string|min:4'
//        ]);
        if ($request->name==null || $request->phone==null || $request->age==null || $request->sex==null || $request->password==null || $request->viloyat==null)
            return response()->json([
                'code' => 3,
                'user' => 0,
                'phone' => $request->phone,
                'name' => $request->name,
                'message' => 'Barcha qatorlarni to`ldiring'
            ],403);
        $phoneNumber = preg_replace('/\s|\+|-|\(|\)/','', $request->phone);
        $pattern = "/^[8-9]{3}[0-9]{9}$/";
        if( !preg_match( $pattern, $phoneNumber, $out ) ){
            return response()->json([
                'code' => 3,
                'user' => 0,
                'phone' => $request->phone,
                'name' => $request->name,
                'message' => 'Barcha qatorlarni to`ldiring'
            ],403);
        }

        $mail = User::where('phone',$request->phone)->first();
        if (isset($mail)) return response()->json([
            'code' => 1,
            'user' => 0,
            'phone' => $request->phone,
            'name' => $request->name,
            'message' => 'Bunday nomer tizimda mavjud'
        ],403);
        $vercode=substr(rand(),0,6);

        $user = new User([
            'name' => $request->name,
            'age' => $request->age,
            'password' => bcrypt($request->password),
            'phone' =>$request->phone,
            'confirm' => $vercode,
            'sex' => $request->sex,
            'image'=>'/storage/default_user.png',
            'viloyat_id' =>$request->viloyat
        ]);
        if ($user->save()){
//            $text = 'Anzan || Код подтверждения - '.$vercode;
//            Queque::send_sms($request->phone,$text);
        }
        else {
            return response()->json([
                'code' => 2,
                'user' => 0,
                'phone' => $request->phone,
                'name' => $request->name,
                'message' => 'Foydalanuvchi saqlanmadi'
            ],403);
        }

        return response()->json([
            'code' => 0,
            'user' => $user->id,
            'phone' => $request->phone,
            'name' => $request->name,
            'message' => 'Akkaunt omadli yaratildi'
        ], 201);
    }

    public function smsverify(Request $request)
    {
        $user = User::where('phone', $request->phone)
            ->where('confirm', $request->vercode)
            ->first();
        if ($user){
            $user['confirm'] = substr(rand(),0,6);
            $user['status'] = 1;
            $user->save();
            return response()->json([
                'code' => 0,
                'message' => 'Проверка кода прошла успешно'
            ]);
        }
        else {
            return response()->json([
                'code' => 1,
                'message' => 'Ошибка проверки кода!'
            ]);
        }
    }

    public function passwordForgot(Request $request)
    {
        $user = User::where('phone', $request->phone)->first();

        if($user){
            $password = Hash::make($request->password);
            $user['password'] = $password;
            $user->save();

            return response()->json([
                'code' => 0,
                'message' => 'Пароль успешно изменен'
            ]);
        }else{
            return response()->json([
                'code' => 1,
                'message' => 'Не найден номер'
            ]);
        }
    }

    public function sendsmsver()   /*Akkauntiga kirib, lekin smsni aktivatsiya qilmagan bo`lsa,*/
    {
        $user = User::find(Auth::id());

        $code = substr(rand(),0,6);
        $user['confirm'] = $code;
        $user->save();
        Queque::send_sms($user->phone,'Anzan || Код подтверждения - '.$code);

        return response()->json([
            'code' => 0,
            'message' => 'Код подтверждения номера успешно отправлен'
        ]);

    }


    public function forgot(Request $request)
    {
        $this->validate($request,[
            'phone' => 'required',
        ]);
        $user = User::where('phone', $request->phone)->first();
        if ($user == null)
        {
            return response()->json([
                'code' => 1,
                'message' => 'Не найден номер'
            ]);
        }
        else
        {
            $to =$user->phone;
            $code = substr(rand(),0,6);

            DB::table('password_resets')->insert(
                ['phone' => $user->phone, 'token' => $code, 'created_at' => date("Y-m-d h:i:s")]
            );
            $user['confirm'] = $code;
            $user->save();
            Queque::send_sms($to, 'Anzan || Код подтверждения - '.$code);

            return response()->json([
                'code' => 0,
                'message' => 'Сброс пароля отправлена на ваш номер'
            ]);
        }

    }

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'code' => 0,
            'message' => 'Tizimdan chiqildi'
        ]);
    }
}
