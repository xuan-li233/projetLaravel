<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booklist extends Model
{
    protected $table = 'booklist';

    protected $fillable = ['name','author'];

}
