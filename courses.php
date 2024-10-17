<?php
require_once("util-db.php");
require_once("model-courses.php");

$pageTitle = "Courses";
include "view-header.php";
$students = selectCourses();
include "view-students.php";
include "view-footer.php";
?>
