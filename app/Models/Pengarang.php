<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    use HasFactory;
    protected $table = "pengarang";
    protected $primaryKey = "id";
    protected $fillable = [
       'id', 'nama', 'alamat' ];

    public function buku(){
        return $this->hasMany(Buku::class);
    }
}
