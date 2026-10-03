<?php
$username = "BSIT BA 3104";
$user_id = 12345678;
$super_prof = "Sir Mags";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Demo</title>
</head>
<body>
    <h1>
        <label>Username:</label><br>
        <?php echo $username; ?><br>

        <label>User ID:</label><br>
        <?php echo $user_id; ?><br>

        <label>Super Prof:</label><br>
        <?php echo $super_prof; ?>
    </h1>

    <button type="button" onclick="greetuser()">Greet User</button>

    <script>
        let username = "<?php echo $username; ?>";
        let userId = "<?php echo $user_id; ?>";

        function greetuser() {
            alert("Hello " + username + "! Your user id is " + userId);
        }
    </script>
</body>
</html>