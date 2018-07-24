<?php namespace Sanga\CoursesModule\Student;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sanga\CoursesModule\Student\Contract\StudentRepositoryInterface;
use Faker\Generator;

class StudentSeeder extends Seeder
{
    public $students;
    public $faker;

    public function __construct(StudentRepositoryInterface $students, Generator $faker)
    {
        $this->students = $students;
        $this->faker = $faker;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->students->truncate();

        for($i = 0; $i < 10; $i++) {
            $this->students->create(
                [
                    'name' => $this->faker->name,
                    'email' => $this->faker->email
                ]
            );
        }
    }
}
