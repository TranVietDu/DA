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
    protected $table = 'tintimviecs';
    protected $fillable = [
        'id','user_id', 'ten', 'gioitinh', 'ngaysinh', 'email', 'anh', 'dienthoai', 'nganhnghe', 'kinhnghiem', 'thoigian', 'mucluong', 'mota'
    ];

    public function user()
    {
        return $this->belongsTo(TinTuyenDung::class);
    }
}
