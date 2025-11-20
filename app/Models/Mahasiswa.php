<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    /**
     * Explicit table name to match migration.
     */
    protected $table = 'mahasiswa';
    protected $guarded = [];
}
