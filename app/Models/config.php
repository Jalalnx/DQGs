<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tests\TestCase;
class config extends Model
{
    use HasFactory;
    protected $table = 'configs';
}
