<?php namespace Sanga\CoursesModule\Course;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sanga\CoursesModule\Course\Contract\CourseRepositoryInterface;
use Sanga\CoursesModule\Category\CategoryModel;
use Sanga\CoursesModule\Lecturer\LecturerModel;
use Faker\Generator;

class CourseSeeder extends Seeder
{
    public $courses;
    public $faker;

    public function __construct(CourseRepositoryInterface $courses, Generator $faker)
    {
        $this->courses = $courses;
        $this->faker = $faker;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $lecturers = LecturerModel::limit(3)->get();
        $categories = CategoryModel::limit(3)->get();


        $this->courses->truncate();

        for($i = 0; $i < 10; $i++) {
            $this->courses->create(
                [
                    'en' => [
                        'name' => $this->faker->words(2, true),
                        'description' => null,
                        'short_description' => null
                    ],
                    'slug' => $this->faker->uuid(),
                    'images' => null,
                    'lecturers' => null,
                    'categories' => null,
                    'featured' => false,
                    'enabled' => true
                ]
            );
        }
    }
}
