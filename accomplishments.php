<?php
session_start();
if (isset($_POST['courses'])) {
    $_SESSION['courses'] = $_POST['courses'];
} else {
    $_SESSION['courses'] = [];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p>
        <form action="confirm.php" method="POST">
            <label for="accomplishments">List your accomplishments:</label><br>
            <textarea name="accomplishments" rows="5" cols="40" required></textarea><br>
            <input type="submit" value="Next">
            </p>
        </form>
    </body>
</html>
