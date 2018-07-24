<?php namespace Sanga\CoursesModule\Schedule;

use Anomaly\Streams\Platform\Entry\EntryPresenter;

class SchedulePresenter extends EntryPresenter
{
    public function availableSeat()
    {
        return $this->object->seats - ($this->object->participants->count());
    }
}
