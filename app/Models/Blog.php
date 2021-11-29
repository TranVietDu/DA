<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Blog extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sortable;
    // protected $dates = ['deleted_at'];
    protected $table = 'blogs';
    protected $fillable = [
        'user_id','tennguoiviet','tieude','noidung', 'anh','luotxem',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id')->withTrashed();
    }

    public function binhluan()
    {
        return $this->hasMany(BinhLuan::class);
    }
}
