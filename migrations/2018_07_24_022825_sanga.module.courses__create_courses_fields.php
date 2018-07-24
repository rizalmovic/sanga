<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Sanga\CoursesModule\Lecturer\LecturerModel;
use Sanga\CoursesModule\Category\CategoryModel;

class SangaModuleCoursesCreateCoursesFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '_'
            ],
        ],
        'short_description' => 'anomaly.field_type.wysiwyg',
        'description'       => 'anomaly.field_type.wysiwyg',
        'images'            => 'anomaly.field_type.files',
        'lecturers' => [
            'type' => 'anomaly.field_type.multiple',
            'config'=> [
                'title_name' => 'name',
                'related' => LecturerModel::class
            ]
        ],
        'categories' => [
            'type' => 'anomaly.field_type.multiple',
            'config'=> [
                'title_name' => 'name',
                'related' => CategoryModel::class
            ]
        ],
        'featured'          => 'anomaly.field_type.boolean',
        'enabled'           => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true,
            ],
        ],
    ];
}
