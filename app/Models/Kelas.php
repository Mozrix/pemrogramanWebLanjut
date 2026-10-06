<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public function user()
    {
        return $this->hasMany(UserModel::class, 'kelas_id');
    }

    public function getKelas(){
        return $this->all();
    }
}