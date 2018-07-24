<?php namespace Sanga\CoursesModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sanga\CoursesModule\Category\CategorySeeder;
use Sanga\CoursesModule\Lecturer\LecturerSeeder;

class CoursesModuleSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(LecturerSeeder::class);
    }
}