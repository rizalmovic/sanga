<?php namespace Sanga\CoursesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class CoursesModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-book';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'courses' => [
            'buttons' => [
                'new_course',
            ],
        ],
        'lecturers' => [
            'buttons' => [
                'new_lecturer',
            ],
        ],
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
        'schedules' => [
            'buttons' => [
                'new_schedule',
            ],
        ],
        'students' => [
            'buttons' => [
                'new_student',
            ],
        ],
    ];

}
