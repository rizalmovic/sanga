<?php namespace Sanga\CoursesModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sanga\CoursesModule\Category\CategorySeeder;
use Sanga\CoursesModule\Course\CourseSeeder;
use Sanga\CoursesModule\Lecturer\LecturerSeeder;
use Sanga\CoursesModule\Student\StudentSeeder;

class CoursesModuleSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(LecturerSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(CourseSeeder::class);
    }
}