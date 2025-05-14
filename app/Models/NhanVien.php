<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PhongBan;

class NhanVien extends Model
{
    protected $table = 'nhan_viens';
    

    protected $fillable = [
        'ho_ten',
        'email',
        'so_dien_thoai',
        'phong_ban_id',
    ];

    public function phongBan()
    {
        return $this->belongsTo(PhongBan::class, 'phong_ban_id');
    }
}
