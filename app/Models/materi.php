<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;
    protected $table = 'materis';
    protected $fillable = [
        'kelas', 'Nama_materi', 'deskripsi', 'paragraf_1', 'paragraf_2', 'paragraf_3', 'paragraf_4', 'paragraf_5',
        'link_youtube'
    ];

    public function kategori()
    {
        return $this->hasMany(Category::class);
    }
    public function subMateri()
    {
        return $this->hasMany(materi::class);
    }
}