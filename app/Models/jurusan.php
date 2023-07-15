<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $table = "tb_jurusan";

    protected $primaryKey = "jurusan_id";

    protected $guarded = [];
}
