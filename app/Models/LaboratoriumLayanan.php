<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaboratoriumLayanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "LABORATORIUM_LAYANAN";
    protected $primaryKey = "LAYANAN_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];
    protected $fillable = [
        'LAYANAN_ID',
        'LAYANAN_JUDUL',
        'LAYANAN_DESKRIPSI',
        'LAYANAN_URUTAN',
        'LAYANAN_OFFICER',
    ];
    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "LAYANAN_OFFICER", "id");
    }
}
