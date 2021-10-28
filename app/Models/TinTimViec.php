<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTimViec extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'TinTimViec';
    protected $fillable = [
        'id', 'ten', 'gioitinh', 'ngaysinh', 'email', 'anh', 'dienthoai', 'nganhnghe', 'kinhnghiem', 'thoigian', 'mucluong', 'mota'
    ];
}
