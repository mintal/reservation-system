<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * App\Reservation
 *
 * @property-read \App\Room $room
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon $date
 * @property string $start
 * @property string $end
 * @property string $description
 * @property int $room_id
 * @property int $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Reservation whereUpdatedAt($value)
 */
class Reservation extends Model
{


    protected $fillable = ['title','date', 'start','end','description', 'created_by', 'section_id'];
    protected $hidden = ['created_at','updated_at', 'created_by','section_id'];
    protected $dates = ['date'];

    public function user() {
        return $this->belongsTo(User::class,'created_by','id');
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }
}
