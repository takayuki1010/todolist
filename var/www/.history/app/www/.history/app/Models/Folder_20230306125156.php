<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    // 変更可能カラム
    protected $fillable = [
        'title';
    ];

    // このモデルのテーブル名
    protected $table = 'folders';
}
