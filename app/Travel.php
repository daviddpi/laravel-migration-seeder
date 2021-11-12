<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travel_controls';
    protected $fillable = ['place', 'country', 'description', 'price', 'image_url'];
}