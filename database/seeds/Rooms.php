<?php

use Illuminate\Database\Seeder;
use App\Room;

class Rooms extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoom("Pentest Hub", 1);
        $this->createRoom("Left Innovation Lab", 1);
        $this->createRoom("Right Innovation Lab", 1);
    }

    function createRoom($name, $floor, $number = null) {
        $temp = new Room;
        $temp->floor = $floor;
        $temp->name = $name;
        $temp->number = $number;
        $temp->save();
    }
}
