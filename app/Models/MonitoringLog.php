<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MonitoringLog extends Model
{
    protected $fillable = [
        'server_config_id',
        'jalur_aktif',
        'ip_aktif',
        'status',
        'last_checked'
    ];

    protected $casts = [
        'last_checked' => 'datetime',
        'status' => 'boolean',
    ];

    public function serverConfig(): BelongsTo
    {
        return $this->belongsTo(ServerConfig::class);
    }
}
