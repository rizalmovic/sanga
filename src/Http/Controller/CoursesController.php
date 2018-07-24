<?php namespace Sanga\CoursesModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Anomaly\Streams\Platform\View\ViewTemplate;
use Sanga\CoursesModule\Course\CourseModel;
use Sanga\CoursesModule\Course\Contract\CourseRepositoryInterface;

class CoursesController extends PublicController
{
    public function index(CourseRepositoryInterface $courses, ViewTemplate $template)
    {
        $data = $courses->all();
        return view('sanga.module.courses::courses.lists', compact('data'));
    }
}