<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pks extends Model
{
    protected $fillable = [
        'nama_pks'
    ];

    public function serverConfigs(): HasMany
    {
        return $this->hasMany(ServerConfig::class);
    }
}