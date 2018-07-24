<?php namespace Sanga\CoursesModule\Lecturer;

use Sanga\CoursesModule\Lecturer\Contract\LecturerRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class LecturerRepository extends EntryRepository implements LecturerRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var LecturerModel
     */
    protected $model;

    /**
     * Create a new LecturerRepository instance.
     *
     * @param LecturerModel $model
     */
    public function __construct(LecturerModel $model)
    {
        $this->model = $model;
    }
}
