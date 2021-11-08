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

    protected $table = 'tintuyendungs';

    protected $fillable = [
        'id','user_id', 'tieude', 'tenquan', 'diachi', 'soluong', 'nganhnghe','luong', 'thoigian','ngayhethan', 'mota', 'anh'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
