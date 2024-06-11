<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class KalenderAkademik extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "KALENDER_AKADEMIK";
    protected $primaryKey = "KALENDER_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];

    protected $fillable = [
        'KALENDER_ID',
        'KALENDER_TAHUN_AJARAN',
        'KALENDER_TANGGAL',
        'KALENDER_SEMESTER',
        'KALENDER_KEGIATAN',
        'KALENDER_OFFICER',
    ];

    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "KALENDER_OFFICER", "id");
    }

}
