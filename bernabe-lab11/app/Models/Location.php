<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $primaryKey = 'location_id';
    protected $fillable = [
        'location_id', 'street_address', 'postal_code', 'city', 
        'state_province', 'country_id'
    ];

    /**
     * Get the country that owns the location.
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    /**
     * Get the departments for the location.
     */
    public function departments()
    {
        return $this->hasMany(Department::class, 'location_id', 'location_id');
    }
}