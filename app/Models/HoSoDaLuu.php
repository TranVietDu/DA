<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class HoSoDaLuu extends Model
{
    use SoftDeletes;
    use HasFactory;
    use Sortable;
    protected $dates = ['deleted_at'];

    protected $table = 'ho_so_da_luu';

    protected $fillable = [
        'id', 'user_id', 'ten', 'ngaysinh', 'gioitinh', 'sdt', 'email', 'nganhnghe', 'diachi', 'mota', 'anh'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}