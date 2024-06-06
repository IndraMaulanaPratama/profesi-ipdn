<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BiayaPendidikan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "BIAYA_PENDIDIKAN";
    protected $primaryKey = "PENDIDIKAN_ID";
    protected $keyType = "string";
    protected $perPage = 10;
    protected $with = ['user'];
    protected $fillable = [
        'PENDIDIKAN_ID',
        'PENDIDIKAN_NAMA',
        'PENDIDIKAN_SATUAN',
        'PENDIDIKAN_TARIF',
        'PENDIDIKAN_OFFICER'
    ];
    
    protected $hidden = ['updated_at', 'deleted_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "PENDIDIKAN_OFFICER", "id");
    }

}
