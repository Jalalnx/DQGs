<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articale extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'articales';
    protected $fillable = [
       'title', 'content'
            ];
}
