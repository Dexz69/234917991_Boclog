<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Enter text: <input type="text" name="inputText">
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST["inputText"];
            echo "<p>You entered: $text</p>";
        }
    ?>
</body>
</html>
