<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JurusanModel extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    public function user()
    {
        return $this->hasMany(UserModel::class, 'nama_jurusan');
    }

    public function getJurusan(){
        return $this->all();
    }
}
