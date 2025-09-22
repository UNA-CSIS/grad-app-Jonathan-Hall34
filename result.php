<?php
session_start();

function evaluation($accomplishments, $numCoursesListed, $numCoursesTaken) {
    $keyword = "PHP";
    $threshold = 0.5;

    $hasKeyword = stripos($accomplishments, $keyword) !== false;
    $meetsThreshold = ($numCoursesTaken / $numCoursesListed) >= $threshold;

    return $hasKeyword && $meetsThreshold;
}

$courses = $_SESSION['courses'];
$accomp  = $_SESSION['accomplishments'];

$totalOffered = 5;
$taken = count($courses);

$accepted = evaluation($accomp, $totalOffered, $taken);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        if ($accepted) {
            echo "You are accepted for a phone interview.";
      } else {
            echo "Sorry, your application was rejected.";
      }
        ?>
    </body>
</html>
