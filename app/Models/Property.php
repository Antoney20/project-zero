<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';

    protected $fillable = [
        'title',
        'pcontent',
        'type',
        'stype',
        'size',
        'price',
        'loc',
        'city',
        'state',
        'status',
        'pimage',
        'pimage1',
        'pimage2',
        'pimage3',
        'uid',
        'isFeatured',
        'scontent',
        'rsize',
    ];

    /**
     * Get all properties.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllProperties()
    {
        return self::all();
    }

    /**
     * Get a specific property by its ID.
     *
     * @param int $id
     * @return \App\Models\Property|null
     */
    public static function getPropertyById($id)
    {
        return self::find($id);
    }

    // Define any additional relationships or methods here
}
