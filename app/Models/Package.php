<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    protected $fillable = [
        'package_name',
        'subscription',
        'type',
    ];

    public $timestamps = false;


    public function marketing() {
        return $this->hasOne(Marketing::class);
    }

    public function basicFeature() {
        return $this->hasOne(BasicFeature::class);
    }


}
