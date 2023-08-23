<?php

namespace App\Http\Controllers;

use App\rutTien;
use App\thongTinCaNhan;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        $list = User::where('name', 'like', '%' . $req['key'] . '%')->orderBy('id');
        if(Auth::user()->role==1){
            $list->where('role',0);
        }
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
            $check->role = $request->role;
            $info = thongTinCaNhan::where('user_id',$request->user_id)->first();
            $info->so_du = $request->so_du;
            $info->ngan_hang = $request->ngan_hang;
            $info->so_tai_khoan = $request->so_tai_khoan;
            $info->chu_tai_khoan = $request->chu_tai_khoan;
            $info->ho_ten = $request->ho_ten;
            $info->dia_chi = $request->dia_chi;
            $info->cmnd = $request->cmnd;
            $info->gioi_tinh = $request->gioi_tinh;
            $info->ngay_sinh = $request->ngay_sinh;
            $info->nghe_nghiep = $request->nghe_nghiep;
            $info->thu_nhap = $request->thu_nhap;
            $info->muc_dich_vay = $request->muc_dich_vay;
            $info->sdt_nguoi_than = $request->sdt_nguoi_than;
            $info->moi_quan_he = $request->moi_quan_he;
            $info->so_tien_vay = $request->so_tien_vay;
            $info->tra_moi_ky = $request->tra_moi_ky;
            if ($request->file('anh_mat_truoc')) {
                $hinhAnhMatTruoc = $request->file('anh_mat_truoc');
                $filePathMatTruoc = '/images/xacMinh/' . uniqid() . '.' . $hinhAnhMatTruoc->extension();
                $hinhAnhMatTruoc->move(public_path('images/xacMinh'), $filePathMatTruoc);
                $info->anh_mat_truoc = $filePathMatTruoc;
            }
            if ($request->file('anh_mat_sau')) {
                $hinhAnhMatSau = $request->file('anh_mat_sau');
                $filePathMatSau = '/images/xacMinh/' . uniqid() . '.' . $hinhAnhMatSau->extension();
                $hinhAnhMatSau->move(public_path('images/xacMinh'), $filePathMatSau);
                $info->anh_mat_sau = $filePathMatSau;
            }
            if ($request->file('anh_chan_dung')) {
                $hinhAnhChanDung = $request->file('anh_chan_dung');
                $filePathChanDung = '/images/xacMinh/' . uniqid() . '.' . $hinhAnhChanDung->extension();
                $hinhAnhChanDung->move(public_path('images/xacMinh'), $filePathChanDung);
                $info->anh_chan_dung = $filePathChanDung;
            }
            $info->save();
            $check->save();
            $res = [
                'rc' => '0',
                'data' => $check,
                'dataInfo' => $info,
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
