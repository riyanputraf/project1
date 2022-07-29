<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'judul', 'pengarang_id', 'genre' ];

    public function pengarang(){
        return $this->belongsTo(Pengarang::class);
    }
}
