<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboratoriumPelatihan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "LABORATORIUM_PELATIHAN";
    protected $primaryKey = "PELATIHAN_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];
    protected $fillable = [
        'PELATIHAN_ID',
        'PELATIHAN_JUDUL',
        'PELATIHAN_DESKRIPSI',
        'PELATIHAN_URUTAN',
        'PELATIHAN_OFFICER',
        'PELATIHAN_TAUTAN',
        'PELATIHAN_KATEGORI'
    ];
    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "PELATIHAN_OFFICER", "id");
    }
}
