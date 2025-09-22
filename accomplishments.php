<?php
session_start();
$_SESSION['courses'] = $_POST['courses'] ?? [];
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
