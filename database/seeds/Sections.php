<?php

use App\Section;
use Illuminate\Database\Seeder;

class Sections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*ROOMS
    1 = pentest
    2 = left inno
    3 = right inno
    */
    public function run()
    {
        $this->createSection('complete room', 1);
        $this->createSection('complete room', 2);
        $this->createSection('complete room', 3);
        $this->createSection('double table',2);
        $this->createSection('single table',2);
        $this->createSection('single table',2);
        $this->createSection('single long table',2);
        $this->createSection('single high table',2);
        $this->createSection('virtual reality',3 );
        $this->createSection('double long table',3);
    }

    private function createSection($name, $room_id){
        $temp = new Section;
        $temp->name = $name;
        $temp->room_id = $room_id;
        $temp->save();
    }
}
