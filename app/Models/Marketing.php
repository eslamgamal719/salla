<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    protected $table = 'marketing';

    protected $fillable = [
        'discount_coupon',
        'marketing_campaigns',
        'abandoned_baskets',
        'special_offers',
        'marketing_coupon',
        'improveSEO',
        'package_id',
    ];

    protected $casts = [
        'discount_coupon' => 'boolean',
        'marketing_campaigns' => 'boolean',
        'abandoned_baskets' => 'boolean',
        'special_offers' => 'boolean',
        'marketing_coupon' => 'boolean',
        'improveSEO' => 'boolean',
    ];

    public $timestamps = false;


}
