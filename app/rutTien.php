<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rutTien extends Model
{

    protected $fillable = [
        'user_id','so_tien','trang_thai'
    ];
    protected $table = 'withdraw';
    public function thongTinTaiKhoan(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
