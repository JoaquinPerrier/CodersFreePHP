<?php

use Controllers\CourseController;
use Models\Course;

// require_once("Controllers/CourseController.php");
// require_once("Models/Course.php");

spl_autoload_register(function($clase){
    echo str_replace("\\",'/', $clase) . ".php <br>";
    if (file_exists(str_replace("\\",'/', $clase) . ".php")) {
        require_once(str_replace("\\",'/', $clase) . ".php");
    }
});

$course = new Course;
$course->saludar();

$course_controller = new CourseController;
$course_controller->saludar();
?>