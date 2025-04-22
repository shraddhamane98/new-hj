<?php require('inc/db_config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php') ?>

    <style>
        div.login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="login-form text-center rounded bg-white shadow overflow-hidden ">
        <form>
            <h4 class="bg-dark text-white py-3">Admin Login Form</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" name="admin_name" class="form-control shadow-none text-center" placeholder="Admin Name" />
                </div>

                <div class="mb-4">
                    <input type="password" name="admin_pass" class="form-control shadow-none text-center" placeholder="password" />
                </div>
                <button type="submit" name="login" class="btn  custom-bg">LOGIN</button>
            </div>
        </form>
    </div>

    <?php require('inc/scripts.php') ?>
</body>

</html>