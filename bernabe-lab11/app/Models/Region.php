<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $primaryKey = 'region_id';
    protected $fillable = ['region_id', 'region_name'];

    /**
     * Get the countries for the region.
     */
    public function countries()
    {
        return $this->hasMany(Country::class, 'region_id', 'region_id');
    }
}