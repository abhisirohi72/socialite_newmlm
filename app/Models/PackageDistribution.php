<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\UserPackagePurchase;

class PackageDistribution extends Model
{
    protected $guarded= [];

    public function user_package_purchases(){
        return $this->belongsTo(UserPackagePurchase::class, 'package_id', 'package_id');
    }
}
