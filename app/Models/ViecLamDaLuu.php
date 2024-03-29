<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class ViecLamDaLuu extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sortable;
    protected $dates = ['deleted_at'];

    protected $table = 'viec_lam_da_luu';

    protected $fillable = [
        'id', 'user_id', 'tieude', 'tenquan', 'diachi', 'soluong', 'nganhnghe', 'luong', 'thoigian', 'mota', 'anh', 'ngayhethan'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}