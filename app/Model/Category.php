<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //if the table name is different then use protected $table = 'tblname'
    protected $table = 'category';

    protected $fillable = [
        'name',
        'description',
    ];
}
