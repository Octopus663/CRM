<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'title',
        'contact_name',
        'contact_email',
        'contact_phone',
        'source',
        'status',
        'manager_id',
        'description',
        'converted_at',
        'converted_client_id',
        'converted_deal_id',
    ];
    public function owner() {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function convertedClient() {
        return $this->belongsTo(Client::class, 'converted_client_id');
    }

    public function convertedDeal() {
        return $this->belongsTo(Deal::class, 'converted_deal_id');
    }

}
