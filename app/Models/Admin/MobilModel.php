<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_mobil';
    protected $primaryKey = 'id_mobil';
    protected $fillable = ['merek', 'model', 'no_plat', 'tarif'];

}
