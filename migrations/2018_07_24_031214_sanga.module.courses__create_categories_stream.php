<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class SangaModuleCoursesCreateCategoriesStream extends Migration
{

    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
        'description'       => 'anomaly.field_type.wysiwyg'
    ];

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'categories',
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
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'description' => ['translatable' => true ]
    ];

}
