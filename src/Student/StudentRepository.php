<?php namespace Sanga\CoursesModule\Student;

use Sanga\CoursesModule\Student\Contract\StudentRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class StudentRepository extends EntryRepository implements StudentRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var StudentModel
     */
    protected $model;

    /**
     * Create a new StudentRepository instance.
     *
     * @param StudentModel $model
     */
    public function __construct(StudentModel $model)
    {
        $this->model = $model;
    }
}
