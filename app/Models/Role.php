<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'is_active',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

    public function activeUsers()
    {
        return $this->hasMany(User::class, 'role_id', 'id')->where('is_active', 1);
    }
}
