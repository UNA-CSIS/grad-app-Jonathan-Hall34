<?php
session_start();
$_SESSION['accomplishments'] = $_POST['accomplishments'];
$first = $_SESSION['first_name'];
$last  = $_SESSION['last_name'];
$accomp  = $_SESSION['accomplishments'];
$courses = $_SESSION['courses'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h2>Confirmation Page</h2>
        
        <label>Name:</label> 
            <?php echo "$first $last"; ?><br></br>

        <label>Courses selected:</label>
        <ul>
            <?php foreach ($courses as $c) { echo "<li>$c</li>"; } ?>
        </ul>


        <label>Accomplishments:</label> 
            <?php echo $accomp; ?><br></br>

        <form action="result.php" method="POST">
        <input type="submit" value="Confirm">
        </form>
    </body>
</html>
