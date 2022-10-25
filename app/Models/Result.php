<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Diseas;
use App\Models\User;

/**
 * App\Models\Result
 *
 * @property-read Diseas|null $Diseas
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Result newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Result newQuery()
 * @method static \Illuminate\Database\Query\Builder|Result onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Result query()
 * @method static \Illuminate\Database\Query\Builder|Result withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Result withoutTrashed()
 * @mixin \Eloquent
 */
class Result extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'result';

    protected $fillable = [
        'user_id','diseas_id','percentage','possibilityOfInjury'
           ];

    public function Diseas(){

        return $this->belongsTo(Diseas::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
