<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <title>SIGN-IN</title>
</head>
<body>
    <div class="container">
        <div class="logo">

        </div>
        <div class="login-container">
            <form method="post" action="login">
                <div class="message">
                    <?php if(isset($message)){
                    echo $message;
                    }
                    ?>
                </div>
            <input name="login" type="text" placeholder="username">
            <input name="password" type="password" placeholder="password">
            <button type="submit">SIGN-IN</button>
        </form>
        </div>

        <div class="new-account-container">
            Create
        <a href="register">New Account</a>
        </div>

    </div>
</body>