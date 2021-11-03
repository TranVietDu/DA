<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'blogs';
    protected $fillable = [
        'user_id','tennguoiviet','tieude','noidung', 'anh',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function binhluan()
    {
        return $this->hasMany(BinhLuan::class);
    }
}
