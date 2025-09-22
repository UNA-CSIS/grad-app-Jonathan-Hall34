<?php
session_start();
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        Welcome, <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?>
        <p>
        <form action="accomplishments.php" method="POST">
            <label for="courses[]">Select the courses you have taken:</label><br>
            <input type="checkbox" name="courses[]" value="Object-Oriented Programming"> Object-Oriented Programming<br>
            <input type="checkbox" name="courses[]" value="Systems Analysis & Design"> Systems Analysis & Design<br>
            <input type="checkbox" name="courses[]" value="Advanced Programming"> Advanced Programming<br>
            <input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking<br>
            <input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security<br>
            <input type="submit" value="Next">
            </p>
        </form>
    </body>
</html>
