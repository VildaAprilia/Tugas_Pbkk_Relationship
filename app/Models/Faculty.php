<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'faculties';

    public function prodis(){

        return $this->hasMany(Prodi::class);
    }
}
