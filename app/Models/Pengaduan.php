<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "PENGADUAN";
    protected $primaryKey = "PENGADUAN_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];
    protected $fillable = [
        'PENGADUAN_ID',
        'PENGADUAN_EMAIL',
        'PENGADUAN_NAME',
        'PENGADUAN_VALUE',
        'PENGADUAN_ATTACHMENT',

        'PENGADUAN_OFFICER',
        'PENGADUAN_SOLUTION',
        'PENGADUAN_STATUS',
    ];
    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "PENGADUAN_OFFICER", "id");
    }
}
