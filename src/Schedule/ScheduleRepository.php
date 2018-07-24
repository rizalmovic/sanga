<?php namespace Sanga\CoursesModule\Schedule;

use Sanga\CoursesModule\Schedule\Contract\ScheduleRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class ScheduleRepository extends EntryRepository implements ScheduleRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ScheduleModel
     */
    protected $model;

    /**
     * Create a new ScheduleRepository instance.
     *
     * @param ScheduleModel $model
     */
    public function __construct(ScheduleModel $model)
    {
        $this->model = $model;
    }
}
