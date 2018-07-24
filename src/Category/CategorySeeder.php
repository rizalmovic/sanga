<?php namespace Sanga\CoursesModule\Category;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Sanga\CoursesModule\Category\Contract\CategoryRepositoryInterface;

class CategorySeeder extends Seeder
{
    public $categories;

    public function __construct(CategoryRepositoryInterface $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Run the seeder.
     */
    public function run()
    {
        $categories = [
            [
                'en' => [
                    'name' => 'Big Data'
                ],
                'slug' => 'big_data'
            ],
            [
                'en' => [
                    'name' => 'Programming'
                ],
                'slug' => 'programming'
            ],
            [
                'en' => [
                    'name' => 'Artificial Intelligence'
                ],
                'slug' => 'artificial_intelligence'
            ],
            [
                'en' => [
                    'name' => 'Java'
                ],
                'slug' => 'java'
            ],
            [
                'en' => [
                    'name' => 'Node.JS'
                ],
                'slug' => 'node_js'
            ],
            [
                'en' => [
                    'name' => 'IT Service Management'
                ],
                'slug' => 'itsm'
            ]
        ];

        $this->categories->truncate();
        
        foreach($categories as $category) {
            $this->categories->create($category);
        }
    }
}
