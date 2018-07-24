<?php namespace Sanga\CoursesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Sanga\CoursesModule\Student\Contract\StudentRepositoryInterface;
use Sanga\CoursesModule\Student\StudentRepository;
use Anomaly\Streams\Platform\Model\Courses\CoursesStudentsEntryModel;
use Sanga\CoursesModule\Student\StudentModel;
use Sanga\CoursesModule\Schedule\Contract\ScheduleRepositoryInterface;
use Sanga\CoursesModule\Schedule\ScheduleRepository;
use Anomaly\Streams\Platform\Model\Courses\CoursesSchedulesEntryModel;
use Sanga\CoursesModule\Schedule\ScheduleModel;
use Sanga\CoursesModule\Category\Contract\CategoryRepositoryInterface;
use Sanga\CoursesModule\Category\CategoryRepository;
use Anomaly\Streams\Platform\Model\Courses\CoursesCategoriesEntryModel;
use Sanga\CoursesModule\Category\CategoryModel;
use Sanga\CoursesModule\Lecturer\Contract\LecturerRepositoryInterface;
use Sanga\CoursesModule\Lecturer\LecturerRepository;
use Anomaly\Streams\Platform\Model\Courses\CoursesLecturersEntryModel;
use Sanga\CoursesModule\Lecturer\LecturerModel;
use Sanga\CoursesModule\Course\Contract\CourseRepositoryInterface;
use Sanga\CoursesModule\Course\CourseRepository;
use Anomaly\Streams\Platform\Model\Courses\CoursesCoursesEntryModel;
use Sanga\CoursesModule\Course\CourseModel;
use Illuminate\Routing\Router;

class CoursesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/courses/students'           => 'Sanga\CoursesModule\Http\Controller\Admin\StudentsController@index',
        'admin/courses/students/create'    => 'Sanga\CoursesModule\Http\Controller\Admin\StudentsController@create',
        'admin/courses/students/edit/{id}' => 'Sanga\CoursesModule\Http\Controller\Admin\StudentsController@edit',
        'admin/courses/schedules'           => 'Sanga\CoursesModule\Http\Controller\Admin\SchedulesController@index',
        'admin/courses/schedules/create'    => 'Sanga\CoursesModule\Http\Controller\Admin\SchedulesController@create',
        'admin/courses/schedules/edit/{id}' => 'Sanga\CoursesModule\Http\Controller\Admin\SchedulesController@edit',
        'admin/courses/schedules/add/{id}' => 'Sanga\CoursesModule\Http\Controller\Admin\SchedulesController@add',
        'admin/courses/categories'           => 'Sanga\CoursesModule\Http\Controller\Admin\CategoriesController@index',
        'admin/courses/categories/create'    => 'Sanga\CoursesModule\Http\Controller\Admin\CategoriesController@create',
        'admin/courses/categories/edit/{id}' => 'Sanga\CoursesModule\Http\Controller\Admin\CategoriesController@edit',
        'admin/courses/lecturers'           => 'Sanga\CoursesModule\Http\Controller\Admin\LecturersController@index',
        'admin/courses/lecturers/create'    => 'Sanga\CoursesModule\Http\Controller\Admin\LecturersController@create',
        'admin/courses/lecturers/edit/{id}' => 'Sanga\CoursesModule\Http\Controller\Admin\LecturersController@edit',
        'admin/courses'           => 'Sanga\CoursesModule\Http\Controller\Admin\CoursesController@index',
        'admin/courses/create'    => 'Sanga\CoursesModule\Http\Controller\Admin\CoursesController@create',
        'admin/courses/edit/{id}' => 'Sanga\CoursesModule\Http\Controller\Admin\CoursesController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Sanga\CoursesModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Sanga\CoursesModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Sanga\CoursesModule\Event\ExampleEvent::class => [
        //    Sanga\CoursesModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Sanga\CoursesModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        CoursesStudentsEntryModel::class => StudentModel::class,
        CoursesSchedulesEntryModel::class => ScheduleModel::class,
        CoursesCategoriesEntryModel::class => CategoryModel::class,
        CoursesLecturersEntryModel::class => LecturerModel::class,
        CoursesCoursesEntryModel::class => CourseModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        StudentRepositoryInterface::class => StudentRepository::class,
        ScheduleRepositoryInterface::class => ScheduleRepository::class,
        CategoryRepositoryInterface::class => CategoryRepository::class,
        LecturerRepositoryInterface::class => LecturerRepository::class,
        CourseRepositoryInterface::class => CourseRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
