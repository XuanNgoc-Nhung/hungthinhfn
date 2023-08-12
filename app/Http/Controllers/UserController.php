<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Hash;

class UserController extends Controller
{
    public function getHome(){
        return view('user.home');
    }
    public function getDangKy(){
        return view('user.dang-ky');
    }
    public function getDangNhap(){
        return view('user.dang-nhap');
    }
    public function getPageHoSo(){
        return view('user.ho-so');
    }
    public function getBankInfo(){
        return view('user.bank-info');
    }
    public function dangKyTaiKhoan(Request $request){
        Log::info('Đăng ký tài khoản:');
        $check = User::where('phone',$request->phone)->count();
        $res = null;
        if($check>=1){
            Log::info('Đã có tài khoản đăng đăng ký với sđt trên');
            $res = [
                'rc' => '1',
                'rd' => 'Số điện thoại đã được sử dụng',
            ];
        }else{
            Log::info('Tiến hành đăng ký');
            $newMember = User::create([
                'phone' => $request->phone,
                'name' => $request->phone,
                'status' => 1,
                'password' => Hash::make($request->pass)
            ]);
            $credentials = array(
                'phone' => $request->phone,
                'password' => $request->pass
            );
            $auth = Auth::attempt($credentials);
            if ($auth) {
                Log::info('Đăng nhập thành công');
                $res = [
                    'rc' => '0',
                    'rd' => 'Đăng ký thành công',
                    'data' => $auth,
                ];
            }
        }
        return json_encode($res);
    }
}
