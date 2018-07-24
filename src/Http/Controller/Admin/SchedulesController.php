<?php namespace Sanga\CoursesModule\Http\Controller\Admin;

use Sanga\CoursesModule\Schedule\Form\ScheduleFormBuilder;
use Sanga\CoursesModule\Schedule\Form\ParticipantFormBuilder;
use Sanga\CoursesModule\Schedule\Table\ScheduleTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class SchedulesController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ScheduleTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ScheduleTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ScheduleFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ScheduleFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ScheduleFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ScheduleFormBuilder $form, $id)
    {
        return $form->render($id);
    }

    /**
     * Add participants
     *
     * @param ParticipantFormBuilder $form
     * @param int $id
     * @return void
     */
    public function add(ParticipantFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
