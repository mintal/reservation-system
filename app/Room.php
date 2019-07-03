<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Room
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Reservation[] $reservations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Section[] $sections
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $floor
 * @property int|null $number
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Room whereUpdatedAt($value)
 */
class Room extends Model
{
    protected $fillable = [
        'name', 'number'
    ];
    protected $hidden = ['id','created_at','updated_at', 'created_by'];


    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

    public function sections(){
        return $this->hasMany(Section::class);
    }

}
