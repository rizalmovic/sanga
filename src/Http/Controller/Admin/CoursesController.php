<?php namespace Sanga\CoursesModule\Http\Controller\Admin;

use Sanga\CoursesModule\Course\Form\CourseFormBuilder;
use Sanga\CoursesModule\Course\Table\CourseTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class CoursesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param CourseTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CourseTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param CourseFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(CourseFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param CourseFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(CourseFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
