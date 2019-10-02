<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://code.uz
 * Date: 04.04.2019 11:01
 * Content: "Simplex CMS"
 * Site: http://simplex.uz
 */

namespace App\Http\Controllers\Api;



use App\TestBall;
use App\Tests;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;
use phpseclib\Net\SFTP;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except(['index','getUser']);
    }

    public function index()
    {
        return "api";
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'image' => 'mimes:png,jpg,jpeg,svg,gif'
        ]);
        $user = User::find(Auth::user()->id);
        $rasm = $user->image;
            $user->update([
                'name' => ($request->name==null)?$user->name:$request->name,
                'viloyat_id' => ($request->viloyat==null)?$user->viloyat_id:$request->viloyat,
                'sex' => ($request->sex==null)?$user->sex:$request->sex,
                'email' => ($request->email==null)?$user->email:$request->email,
            ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = Auth::user()->id."_".time() . '.' . $image->getClientOriginalExtension();
            $location = '../storage/app/public/'. $filename;
            Image::make($image)->save($location);
            $user->image =  "/storage/".$filename;
            $user->save();

            $pieces = explode("/", $rasm);
            @unlink('../storage/app/public/'.$pieces[2]);
//            $upload = Queque::upload();
//            $upload->chdir('profile'); // open directory 'test'
//            $link = 'https://neuron.simplex.uz/storage/'.$filename;
//            $upload->put($filename, $link,SFTP::SOURCE_LOCAL_FILE);
//            $upload->delete($pieces[3]);
//            $upload->_disconnect(true);
        }
        return response()->json([
            'code' => 0,
            'user_image' => $user->image,
            'message' => 'Профиль успешно обновлен'
        ]);
    }

    public function passwordOld(Request $request)
    {
        $this->validate($request,[
            'passwordold' =>'required',
        ]);
        $user = User::find(Auth::user()->id);
        if(Hash::check($request->passwordold, $user->password)){
            return response()->json([
                'code' => 0,
                'message' => 'Пароль совпадают'
            ]);
        }else{
            return response()->json([
                'code' => 1,
                'message' => 'Пароли не совпадают!'
            ]);
        }
    }

    public function passwordChange(Request $request)
    {
        $this->validate($request,[
            'passwordold' =>'required',
            'password' => 'required|min:4'
        ]);
        $user = User::find(Auth::user()->id);

        if(Hash::check($request->passwordold, $user->password)){
            $password = Hash::make($request->password);
            $user->password = $password;
            $user->save();

            return response()->json([
                'code' => 0,
                'message' => 'Пароль успешно изменен'
            ]);
        }else{
            return response()->json([
                'code' => 1,
                'message' => 'Пароли не совпадают!'
            ]);
        }
    }

    public function getUser(Request $request)
    {
        $user = User::where('id',$request->user_id)->select('id','image','name')->first();
        if ($user==null) return response()->json([
            'code' => 0,
            'user' => (object)[]
        ]);
        $res = [];
        $res['count']=Tests::count($request->user_id);
        $res['win']=Tests::galaba($request->user_id);
        $res['lost']=Tests::maglub($request->user_id);
        if ($res['count']==0)  $res['average']=0;
        else $res['average'] = $res['win']/$res['count'];
        $res['count_ball'] = TestBall::sum($request->user_id);
        $res['level'] = TestBall::level($request->user_id);
        $user['natija']=$res;
        return response()->json([
            'code' => 0,
            'user' => $user
        ]);
    }
}
