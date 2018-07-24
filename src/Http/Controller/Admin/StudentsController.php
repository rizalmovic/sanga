<?php namespace Sanga\CoursesModule\Http\Controller\Admin;

use Sanga\CoursesModule\Student\Form\StudentFormBuilder;
use Sanga\CoursesModule\Student\Table\StudentTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class StudentsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param StudentTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(StudentTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param StudentFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(StudentFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param StudentFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(StudentFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
