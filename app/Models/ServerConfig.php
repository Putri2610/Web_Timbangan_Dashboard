<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServerConfig extends Model
{
    protected $fillable = [
        'pks_id',
        'nomor_timbangan',
        'ip_local',
        'ip_internet',
        'username',
        'password'
    ];

    public function pks(): BelongsTo
    {
        return $this->belongsTo(Pks::class);
    }

    public function monitoringLogs(): HasMany
    {
        return $this->hasMany(MonitoringLog::class);
    }
}
