<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category'; // Only if you're using a non-standard name

    protected $fillable = [
        'name',
      ];
}
