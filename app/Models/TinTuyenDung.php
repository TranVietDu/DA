<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TinTuyenDung extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'TinTuyenDung';
    protected $fillable = [
        'id','user_id', 'tieude', 'diachi', 'kinhnghiem', 'soluong', 'gioitinh', 'tenquan', 'luong', 'nganhnghe', 'thoigian', 'anh', 'mota'
    ];
}
