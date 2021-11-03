<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YKienNguoiDung extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'ykiennguoidung';
    protected $fillable = [
        'id','user_id','ten' ,'noidung'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
