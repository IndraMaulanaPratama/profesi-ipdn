<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kurikulum extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "KURIKULUM";
    protected $primaryKey = "KURIKULUM_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];
    protected $fillable = [
        'KURIKULUM_ID',
        'KURIKULUM_KODE',
        'KURIKULUM_MATAKULIAH',
        'KURIKULUM_SKS',
        'KURIKULUM_SEMESTER',
        'KURIKULUM_URUTAN',
        'KURIKULUM_OFFICER',
    ];

    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "KURIKULUM_OFFICER", "id");
    }

}
