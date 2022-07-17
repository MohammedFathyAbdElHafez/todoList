<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0, $i < 10; $i++;) {
            Task::create([
                "title" => "title$i",
                "description" => "description$i",
                "status" => "INPROGRESS"
            ]);
        }
    }
}
