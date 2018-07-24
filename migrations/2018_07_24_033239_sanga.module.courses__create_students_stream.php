<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class SangaModuleCoursesCreateStudentsStream extends Migration
{

    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'email' => 'anomaly.field_type.email',
        'description'       => 'anomaly.field_type.wysiwyg',
        'photo'            => 'anomaly.field_type.file',
        'active'           => [
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
        'slug' => 'students',
         'title_column' => 'name',
         'translatable' => false,
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
        'email' => [
            'unique' => true,
            'required' => true,
        ],
        'description',
        'photo',
        'active'
    ];

}
