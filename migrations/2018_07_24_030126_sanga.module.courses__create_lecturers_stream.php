<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class SangaModuleCoursesCreateLecturersStream extends Migration
{

    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'email' => 'anomaly.field_type.email',
        'description'       => 'anomaly.field_type.wysiwyg',
        'photo'            => 'anomaly.field_type.file',
        'featured'          => 'anomaly.field_type.boolean',
        'enabled'           => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
    ];

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'lecturers',
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
        'name'  => ['required' => true],
        'email' => ['required' => true],
        'description' => ['translatable' => true],
        'photo',
        'featured',
        'enabled'
    ];

}
