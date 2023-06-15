<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitProperty extends Model
{
    use HasFactory;

    protected $table = 'test';

    protected $fillable = [
        'title',
        'pcontent',
        'scontent',
        'ptype',
        'stype',
        'asize',
        'price',
        'location',
        'city',
        'state',
        'pimage',
        'pimage1',
        'pimage2',
        'pimage3',
        'uid',
        'status',
        'isFeatured',
        'rsize',
    ];
}
