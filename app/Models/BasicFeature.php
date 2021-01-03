<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasicFeature extends Model
{
    protected $table = 'basicfeatures';

    protected $fillable = [
        'domain_link',
        'online_payment',
        'shipping_companies',
        'currency',
        'language',
        'users',
        'branches',
        'unlimited_products',
        'unlimited_orders',
        'unlimited_clients',
        'questions_and_reviews',
        'ssl',
        'daily_customer',
        'sales_commission',
        'android_ios_administration',
        'android_ios',
        'package_id',
    ];

    public $timestamps = false;



}
