<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'detail', 'qty', 'price', 'image',
    ];

	protected $dates = [
		'deleted_at',
	];
}
