<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = ['title', 'category', 'slug_1', 'slug_2', 'image_1','image_2', 'saran_penyajian', 'saran_penyimpanan', 'ketahanan_dingin', 'ketahanan_suhu', 'rasa', 'kandungan', 'manfaat', 'contoh_sajian', 'shoppe', 'tokped', 'created_at', 'updated_at'];
}
