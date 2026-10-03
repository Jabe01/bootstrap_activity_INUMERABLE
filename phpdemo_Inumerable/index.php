<?php include 'purephp.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
    <br>
    <a hreflang="purephp.php" href="purephp.php">Next Page Example 1</a>
    <br>
    <h1>
        <br>
        <label>Username:</label>
     
        <?php echo $username; ?>
        <br><br>
        <label>User ID:</label>

        <?php echo $userid; ?>
        <br><br>
        <label>Place:</label>
   
        <?php echo $place; ?>
        <br>
    </h1>

    <button type="button" onclick="greetuser('alert')">Greet User</button>

    <script>
        let username = "<?php echo $username; ?>";
        let userid = "<?php echo $userid; ?>";
        let place = "<?php echo $place ?>";
        function greetuser(name) {
                alert("Hello, " + username + "! Your User ID is: " + userid + " and nakatira ako sa  " + place + ".");
        }
    </script>

</body>
</html>
