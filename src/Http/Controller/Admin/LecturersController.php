<?php namespace Sanga\CoursesModule\Http\Controller\Admin;

use Sanga\CoursesModule\Lecturer\Form\LecturerFormBuilder;
use Sanga\CoursesModule\Lecturer\Table\LecturerTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class LecturersController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param LecturerTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(LecturerTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param LecturerFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(LecturerFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param LecturerFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(LecturerFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
