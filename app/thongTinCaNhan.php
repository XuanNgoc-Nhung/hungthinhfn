<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongTinCaNhan extends Model
{
    protected $fillable = [
        'user_id', 'ho_ten', 'dia_chi', 'cmnd', 'gioi_tinh', 'ngay_sinh', 'nghe_nghiep', 'thu_nhap', 'muc_dich_vay', 'sdt_nguoi_than', 'moi_quan_he', 'ngan_hang', 'so_tai_khoan', 'chu_tai_khoan', 'anh_mat_truoc', 'anh_mat_sau', 'anh_chan_dung','so_tien_vay','thoi_han_vay','lai_suat','tra_moi_ky','so_du','trang_thai'
    ];

    protected $table = 'profile';
    public function thongTinTaiKhoan(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
