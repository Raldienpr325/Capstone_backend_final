<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMateri extends Model
{
    use HasFactory;
    protected $table = 'sub_materis';
    protected $fillable = [
        'materi_id',
        'Nama_sub_materi',
        'deskripsi', 'paragraf_1', 'paragraf_2', 'paragraf_3', 'paragraf_4', 'paragraf_5',
        'link_youtube'
    ];

    public function parent()
    {
        return $this->belongsTo(materi::class, 'materi_id');
    }
}