<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
        'title',
        'amount',
        'currency',
        'status',
        'closed_at',
        'manager_id',
        'client_id',
        'notes',
    ];
    public function owner() {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
