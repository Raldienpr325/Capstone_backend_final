<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriKategori extends Model
{
    use HasFactory;
    protected $table = 'materi_kategori';
    protected $fillable = [
        'materi_id', 'kategori_id'
    ];

    public function materi()
    {
        return $this->belongsTo(materi::class, 'materi_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }
}