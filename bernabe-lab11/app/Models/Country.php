<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'country_id';
    protected $keyType = 'string';
    protected $fillable = ['country_id', 'country_name', 'region_id'];

    /**
     * Get the region that owns the country.
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'region_id');
    }

    /**
     * Get the locations for the country.
     */
    public function locations()
    {
        return $this->hasMany(Location::class, 'country_id', 'country_id');
    }
}