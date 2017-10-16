<?php

use App\Student;
use App\Adviser;
use App\Locker;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/reports/students', function () {
    // FIXME 5
    $students = Student::all();
    
    // print header
    echo "student_id,first_name,last_name,adviser_id,adviser_first_name,adviser_last_name<br>";
    
        foreach ($students as $student) {
            // FIXME 6
            $adviser = $student->adviser;
    
            // FIXME 7-9
            echo "$student->id,$student->first_name,$student->last_name,$adviser->id,$adviser->first_name,$adviser->last_name<br>";
        }
});

$router->get('/reports/lockers', function () {
    // FIXME 10
    $lockers = Locker::all();

    // print header
    echo "locker_id,student_id,student_first_name<br>";

    foreach ($lockers as $locker) {
        // FIXME 11
        $student = $locker->Student;
        // FIXME 12-13
        echo "$locker->id,{$student->id},{$student->first_name}<br>";
    }
});

$router->get('/reports/advisers', function () {
    // FIXME 14
    $advisers = Adviser::all();

    // print header
    echo "adviser_id,adviser_first_name,adviser_last_name,student_id<br>";

    foreach ($advisers as $adviser) {
        // FIXME 15
        $students = $adviser->students;

        foreach ($students as $student) {
            // FIXME 16
            echo "$adviser->id,$adviser->first_name,$adviser->last_name,$student->id<br>";
        }
    }
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
