<?php  
// Allow the config
define('__CONFIG__' ,true) ;
//Require the config
require_once 'inc/config.php'
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/css/uikit.min.css" />
</head>

<body>
    <div class="uk-section uk-container ">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
            <form class="uk-form-stacked js-register">
                    <h1>Register</h1>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-tex" type="email" placeholder="yourEmail@gmail.com" required>
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text" type="password" required  placeholder="Your Password">
                    </div>
                </div>
                <div class="uk-margin uk-alert uk-alert-danger js-error" style= "display:none">
                   
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">
                          Register
                    </button>
                </div>

            </form>
        </div>

    </div>
    <?php require_once "inc/footer.php" ;  ?>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.14/dist/js/uikit-icons.min.js"></script>
</body>

</html>