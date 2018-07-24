<?php

$factory->define(
    Sanga\CoursesModule\Course\CourseModel::class,
    function (Faker\Generator $faker) {
        return [
            'name' => $faker->words(2),
        ];
    }
);
