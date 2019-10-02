<?php
/**
 * Created by PhpStorm.
 * Author: Abdujalilov Dilshod
 * Telegram: https://t.me/coloterra
 * Web: http://websar.uz
 * Content: "Simplex CMS"
 * Site: https://thesimplex.org
 * Date: 17.08.2019 9:49
 */

namespace App\Http\Controllers;

use App\TestBall;
use App\Tests;
use App\User;
use App\Viloyat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    protected function credentials(Request $request)
    {
        if(is_numeric($request->get('phone'))){
            return ['phone'=>$request->get('phone'),'password'=>$request->get('password')];
        }
        return ['email'=>$request->get('phone'),'password'=>$request->get('password')];
    }

    public function login(Request $request)
    {
        if(\Auth::check()){
            return redirect('admin/index');
        }
        else{
            if ($request->isMethod('post')){
                $credentials = $this->credentials($request);
                if(!Auth::attempt($credentials)){
                    $xabar = "Parol yoki Telefon hato!";
                    return view('login', compact('xabar'));  //
                }
                else {
                    if (Auth::user()->user_type==1)
                        return redirect('admin/index');
                    else return redirect('/admin')->with(Auth::logout());
                }
            }
            return view('login');
        }
    }

    public function index()
    {
//        $user = User::orderBy('id', 'desc')->paginate(15);
        return view('admin.index');  // , compact('user')
    }

    public function profil()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('admin.profil', compact('user'));
    }

    public function profilEdit(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        $viloyat = Viloyat::select('id', 'name_uz')->get();
        if ($request->isMethod('post')){
            $rasm = $user->image;
            $user->update([
                'name' => ($request->name==null)?$user->name:$request->name,
                'viloyat_id' => ($request->viloyat==null)?$user->viloyat_id:$request->viloyat,
                'sex' => ($request->sex==null)?$user->sex:$request->sex,
                'email' => ($request->email==null)?$user->email:$request->email,
                'age' => ($request->age==null)?$user->age:$request->age,
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
            }
            $xabar = "Hammasi saqlandi";
            return view('admin.profil-edit', compact('user','viloyat','xabar'));
        }
        return view('admin.profil-edit', compact('user','viloyat'));
    }

    public function passwordChange(Request $request)
    {
        $user = User::where('id',Auth::user()->id)->first();
        if ($request->isMethod('post')){
            if(Hash::check($request->passwordold, $user->password)){
                $password = Hash::make($request->pwd);
                $user->password = $password;
                $user->save();
                $xabar = "Yangi parol o`rnatildi";
                return view('admin.password-change', compact('user','xabar'));
            }else{
                $xabar = "Oldingi parol mos kelmadi";
                return view('admin.password-change', compact('user','xabar'));
            }
        }
        return view('admin.password-change', compact('user'));
    }

    public function logout()
    {
        return redirect('/admin')->with(Auth::logout());
    }

    public function tests()
    {
        $tests = Tests::orderBy('test_id', 'desc')->paginate(100);
        //        $user = User::orderBy('id', 'desc')->paginate(15);
        return view('admin.tests', compact('tests'));  //
    }

    public function testView($id)
    {
        $test  = Tests::where('test_id',$id)->first();
        if (isset($test)) return view('admin.test-view', compact('test'));
        else return redirect('admin/tests');
    }

    public function userView($id)
    {
        $tests = Tests::where('user_id',$id)->orderBy('test_id','desc')->limit(100)->get();
        if (!empty($tests)) {
            $user = User::where('id',$id)->first();
            return view('admin.user-view', compact('tests','user'));
        }
        else return redirect('admin/tests');
    }

    public function users()
    {
        $tests = User::orderBy('id', 'desc')->paginate(100);
        //        $user = User::orderBy('id', 'desc')->paginate(15);
        return view('admin.users', compact('tests'));
    }

    public function balls()
    {
        $tests = User::where('user_type',0)->orderBy('id','desc')->get();
        return view('admin.test-ball', compact('tests'));
    }

}
