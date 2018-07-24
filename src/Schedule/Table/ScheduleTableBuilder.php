<?php namespace Sanga\CoursesModule\Schedule\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class ScheduleTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'course',
        'start_on'
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'name' => [
            'wrapper' => '{value.title}<br/><small>{value.address}</small>',
            'value' => [
                'title' => 'entry.name',
                'address' => 'entry.address'
            ]
        ],
        'course',
        'start_on' => [
            'value' => 'entry.start_on.format("d F Y")'
        ],
        'end_on' => [
            'value' => 'entry.end_on.format("d F Y")'
        ],
        'seats' => [
            'heading' => 'Available Seat',
            'value' => 'entry.availableSeat'
        ],
        'participants' => [
            'value' => 'entry.participants.count',
        ]
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'add',
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
