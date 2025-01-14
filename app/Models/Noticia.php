<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    /** @use HasFactory<\Database\Factories\NoticiaFactory> */
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'imagen', 'url', 'categoria_id'];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
