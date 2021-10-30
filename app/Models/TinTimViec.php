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
    protected $table = 'tintimviec';
    protected $fillable = [
        'id','user_id', 'ten', 'gioitinh', 'ngaysinh', 'lienhe', 'anh', 'mota'
    ];
}
