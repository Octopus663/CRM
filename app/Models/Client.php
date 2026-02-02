<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'email',
        'phone',
        'source',
        'manager_id',
        'tags',
    ];

    /**
     * Менеджер, відповідальний за клієнта
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
    public function deals() {
        return $this->hasMany(Deal::class);
    }
}
