<?php namespace Sanga\CoursesModule\Course;

use Sanga\CoursesModule\Course\Contract\CourseRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CourseRepository extends EntryRepository implements CourseRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CourseModel
     */
    protected $model;

    /**
     * Create a new CourseRepository instance.
     *
     * @param CourseModel $model
     */
    public function __construct(CourseModel $model)
    {
        $this->model = $model;
    }
}
