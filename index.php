<?php  
// Allow the config
define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
</head>

<body>
   <?php echo 'hello today is ' ;
        echo  date("y m d ")
    ?>
        <p>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </p>
    <?php require_once "inc/footer.php" ;  ?>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
</body>

</html>