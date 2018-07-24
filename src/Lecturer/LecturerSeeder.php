<?php namespace Sanga\CoursesModule\Lecturer;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sanga\CoursesModule\Lecturer\Contract\LecturerRepositoryInterface;
use Faker\Generator;

class LecturerSeeder extends Seeder
{

    public $lecturers;
    public $faker;

    public function __construct(LecturerRepositoryInterface $lecturers, Generator $faker)
    {
        $this->lecturers = $lecturers;
        $this->faker = $faker;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->lecturers->truncate();
        $this->lecturers->create(
            [
                'name' => 'Tri Handhika',
                'email' => 'handhika.tri@gmail.com',
                'en' => [
                    'description' => '<p>Tri Handhika was born in Sanga-Sanga, the East Borneo, Indonesia, on April, 14th 1987. He achieved his Bachelor and Master degree from Department of Mathematics, Faculty of Mathematics and Natural Sciences, University of Indonesia, in the field of actuarial statistics and computational finance, respectively. Moreover, he also achieved his Doctoral degree at Gunadarma University in the field of parallel computing to improve the computational performance of derivative asset pricing.<br><br>He is actively teaching at the Computational Mathematics Study Center, Gunadarma University. He is currently the Senior Data Scientist for Big Data division at Metra Digital Media for constructing the Integrated Financial Intelligence Learning System. He also runs the venture company, Sanga-Sanga Group, as the CEO.</p>'
                ],
                'photo' => null,
                'featured' => true,
                'enabled' => true
            ]
        );

        for($i = 0; $i < 10; $i++) {
            $this->lecturers->create(
                [
                    'name' => $this->faker->name,
                    'email' => $this->faker->email,
                    'en' => [
                        'description' => $this->faker->paragraph(4)
                    ],
                    'photo' => null,
                    'featured' => false,
                    'enabled' => true
                ]
            );
        }
    }


}
