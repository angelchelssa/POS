<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // <-- TAMBAHKAN INI
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    protected $fillable = ['username', 'nama', 'password', 'level_id'];
}