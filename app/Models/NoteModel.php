<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteModel extends Model
{
    use HasFactory;
    protected $table = 'maha_note';
    protected $softDelete = false;
    public $timestamps = false;
    protected $primaryKey = 'id_note';
    public $incrementing = false;
    public $keyType = 'string';
    protected $fillable = ['id_note','kolom_1','kolom_2','kolom_3','kolom_4','kolom_5'];
}

