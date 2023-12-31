<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable;

class Usuario extends Authenticable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $primaryKey = 'username';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    
    public function rol():BelongsTo
    {
        return $this->belongsTo(Rol::class);
    }
}
