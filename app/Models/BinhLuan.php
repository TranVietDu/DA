<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'binhluan';
    protected $fillable = [
        'id','blog_id', 'noidung'
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
