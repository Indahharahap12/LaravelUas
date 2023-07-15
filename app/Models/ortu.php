<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ortu extends Model
{
    use HasFactory;

    protected $table = "tb_ortu";

    protected $primaryKey = "ortu_id";

    protected $guarded = [];
}
