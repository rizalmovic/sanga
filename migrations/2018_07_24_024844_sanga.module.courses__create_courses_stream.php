<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class SangaModuleCoursesCreateCoursesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'courses',
        'title_column' => 'name',
        'translatable' => true,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'             => [
            'required'     => true,
            'translatable' => true,
        ],
        'slug'             => [
            'required' => true,
            'unique'   => true,
        ],
        'description'      => [
            'translatable' => true,
        ],
        'short_description'      => [
            'translatable' => true,
        ],
        'images',
        'lecturers',
        'categories',
        'featured',
        'enabled'
    ];

}
