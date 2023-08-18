<?php

namespace App\Http\Controllers;

use App\rutTien;
use App\thongTinCaNhan;
use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function getHome(){
        return view('admin.home');
    }
    public function getKhoanVay(){
        return view('admin.khoan-vay');
    }
    public function getQuanLyTaiKhoan(){
        return view('admin.quan-ly-tai-khoan');
    }
    public function getYeuCauRutTien(){
        return view('admin.quan-ly-yeu-cau-rut-tien');
    }
    public function capNhatTrangThaiYeuCauVay(Request $request){
        $check = thongTinCaNhan::where('id',$request->id)->first();
        if($check){
            $check->trang_thai = $request->trang_thai;
            if($request->trang_thai==1){
                $check->so_du = $check->so_tien_vay;
            }
            $check->save();
            $res = [
                'rc' => '0',
                'data' => $check,
                'rd' => "Cập nhật trạng thái thành công",
            ];
        }else{
            $res = [
                'rc' => '-1',
                'rd' => "Không tìm thấy bản ghi nào",
            ];
        }
        return json_encode($res);
    }
    public function danhSachYeuCauVay(Request $request){

        $req = $request->all();
        $list = thongTinCaNhan::where('so_tien_vay','>',0)->with('thongTinTaiKhoan');
        $total = $list->count();
        $data = $list->orderBy('created_at', 'DESC')->skip($req['start'])->take($req['limit'])->get();
        if (count($data)) {
            $res = [
                'rc' => '0',
                'data' => $data,
                'total' => $total
            ];
        } else {
            $res = [
                'rc' => '1',
                'rd' => 'Không tìm thấy bản ghi nào'
            ];
        }
        return json_encode($res);
    }
    public function danhSachYeuCauRutTien(Request $request){

        $req = $request->all();
        $list = rutTien::with('thongTinTaiKhoan');
        $total = $list->count();
        $data = $list->orderBy('created_at', 'DESC')->skip($req['start'])->take($req['limit'])->get();
        if (count($data)) {
            $res = [
                'rc' => '0',
                'data' => $data,
                'total' => $total
            ];
        } else {
            $res = [
                'rc' => '1',
                'rd' => 'Không tìm thấy bản ghi nào'
            ];
        }
        return json_encode($res);
    }
    public function danhSachTaiKhoan(Request $request){
        $req = $request->all();
        $list = User::where('role',0);
        $total = $list->count();
        $data = $list->with('thongTinTaiKhoan')->orderBy('created_at', 'DESC')->skip($req['start'])->take($req['limit'])->get();
        if (count($data)) {
            $res = [
                'rc' => '0',
                'data' => $data,
                'total' => $total
            ];
        } else {
            $res = [
                'rc' => '1',
                'rd' => 'Không tìm thấy bản ghi nào'
            ];
        }
        return json_encode($res);
    }
    public function capNhatTrangThaiNguoiDung(Request $request){
        $check = User::where('id',$request->user_id)->first();
        if($check){
            $check->thong_bao = $request->thong_bao;
            $check->save();
            $info = thongTinCaNhan::where('user_id',$request->user_id)->first();
            $info->so_du = $request->so_du;
            $info->save();
            $res = [
                'rc' => '0',
                'data' => $check,
                'rd' => "Cập nhật trạng thái thành công",
            ];
        }else{
            $res = [
                'rc' => '-1',
                'rd' => "Không tìm thấy bản ghi nào",
            ];
        }
        return json_encode($res);
    }
    public function capNhatTrangThaiTaiKhoan(Request $request){
        $check = User::where('id',$request->id)->first();
        if($check){
            $check->status = $request->trang_thai;
            $check->save();
            $res = [
                'rc' => '0',
                'data' => $check,
                'rd' => "Cập nhật trạng thái thành công",
            ];
        }else{
            $res = [
                'rc' => '-1',
                'rd' => "Không tìm thấy bản ghi nào",
            ];
        }
        return json_encode($res);
    }
    public function capNhatTrangThaiRutTien(Request $request){
        $check = rutTien::where('id',$request->id)->first();
        if($check){
            $check->trang_thai = $request->trang_thai;
            if($request->trang_thai==2){
                $profile = thongTinCaNhan::where('user_id',$check->user_id)->first();
                $profile->so_du = $check->so_tien;
                $profile->save();
            }
            $check->save();
            $res = [
                'rc' => '0',
                'data' => $check,
                'rd' => "Cập nhật trạng thái thành công",
            ];
        }else{
            $res = [
                'rc' => '-1',
                'rd' => "Không tìm thấy bản ghi nào",
            ];
        }
        return json_encode($res);
    }
}
