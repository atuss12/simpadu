<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    //
    protected $table = 'prodi';
    protected $primaryKey = 'id';
    protected $keyType = 'string';


    protected $fillable = ['nama', 'kaprodi', 'jurusan'];
    
}
