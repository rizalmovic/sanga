<?php namespace Sanga\CoursesModule\Schedule\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Sanga\CoursesModule\Schedule\ScheduleModel;
use Sanga\CoursesModule\Student\StudentModel;
use Sanga\CoursesModule\Course\CourseModel;

class ParticipantFormBuilder extends FormBuilder
{
    protected $model = ScheduleModel::class;

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [
        'name' => [
            'label' => 'Name',
            'type' => 'anomaly.field_type.text',
            'disabled' => true,
            'class' => 'form-control'
        ],
        'participants' => [
            'label' => 'Course',
            'type' => 'anomaly.field_type.multiple',
            'config' => [
                'title_name' => 'name',
                'mode' => 'lookup',
                'related' => StudentModel::class
            ]
        ]
    ];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'cancel',
    ];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

}
