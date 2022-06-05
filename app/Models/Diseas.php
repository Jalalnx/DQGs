<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Question;

/**
 * App\Models\Diseas
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Question[] $Diseas
 * @property-read int|null $diseas_count
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas newQuery()
 * @method static \Illuminate\Database\Query\Builder|Diseas onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas query()
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Diseas whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Diseas withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Diseas withoutTrashed()
 * @mixin \Eloquent
 */
class Diseas extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
       'name', 'description','Diagnosis'
           ];
    public function Question(){
        return $this->hasMany(Question::class);
    }
}
