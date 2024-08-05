<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "KEGIATAN";
    protected $primaryKey = "KEGIATAN_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];

    protected $fillable = [
        'KEGIATAN_ID',
        'KEGIATAN_JUDUL',
        'KEGIATAN_ISI',
        'KEGIATAN_THUMBNAIL',
        'KEGIATAN_OFFICER',
    ];

    // Hidden column on view
    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "KEGIATAN_OFFICER", "id");
    }

}
