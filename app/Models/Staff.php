<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use PHPUnit\Framework\Attributes\Before;

class Staff extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $table = 'staff';
    protected $primaryKey = 'userId';
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profileAvatar'
    ];

    public function role()
    {
        return $this->belongsTo(User::class, 'userId', 'userId');
    }
}
