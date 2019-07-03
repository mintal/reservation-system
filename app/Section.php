<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Section
 *
 * @property-read \App\Room $room
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property int $room_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Section whereUpdatedAt($value)
 */
class Section extends Model
{
    protected $fillable = ['name','room_id'];
    protected $hidden = ['id','created_at','updated_at', 'created_by','room_id'];

    function room(){
        return $this->belongsTo(Room::class);
    }
}
