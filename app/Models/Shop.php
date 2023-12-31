<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop',
        'shop_url',
        'version',
        'installed'
    ];

    public function access_token(): HasOne
    {
        return $this->hasOne(AccessToken::class, 'shop_id');
    }

    public function billing(): HasOne
    {
        return $this->hasOne(Billing::class, 'shop_id');
    }

    public function subscription(): HasOne
    {
        return $this->hasOne(Subscription::class, 'shop_id');
    }

}
