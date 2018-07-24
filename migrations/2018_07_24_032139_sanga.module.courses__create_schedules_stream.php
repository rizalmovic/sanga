<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Sanga\CoursesModule\Student\StudentModel;
use Sanga\CoursesModule\Course\CourseModel;

class SangaModuleCoursesCreateSchedulesStream extends Migration
{

    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'code' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'code',
                'type' => '_'
            ],
        ],
        'course' => [
            'type' => 'anomaly.field_type.relationship',
            'config'=> [
                'title_name' => 'name',
                'related' => CourseModel::class
            ]
        ],
        'description' => 'anomaly.field_type.wysiwyg',
        'address' => 'anomaly.field_type.text',
        'seats' => [
            'type' => 'anomaly.field_type.integer',
            'config' => [
                'separator' => '.',
                'step' => 1
            ]
        ],
        'start_on' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date',
                'date_format' => 'j F Y'
            ]
        ],
        'end_on' => [
            'type' => 'anomaly.field_type.datetime',
            'config' => [
                'mode' => 'date',
                'date_format' => 'j F Y'
            ]
        ],
        'participants' => [
            'type' => 'anomaly.field_type.multiple',
            'config'=> [
                'title_name' => 'name',
                'related' => StudentModel::class
            ]
        ]
    ];

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'schedules',
        'title_column' => 'name',
        'translatable' => true,
        'trashable' => false,
        'searchable' => true,
        'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'required' => true,
        ],
        'code' => [
            'unique' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'course',
        'description' => ['translatable' => true ],
        'address',
        'seats',
        'start_on',
        'end_on',
        'participants'
    ];

}
