<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelcomeSlider extends Model
{
	public $timestamps = false;

    protected $fillable = [
        'image', 'caption_title', 'caption_description',
    ];
}
