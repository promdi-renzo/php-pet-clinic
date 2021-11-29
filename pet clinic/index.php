<?php
require_once('./includes/meta.php')
?>

<body>
    <div class="login-container">
        <div class="login">
            <div class="login__logo">
                <h1>Pet <span>Clinic</span> </h1>
            </div>
            <form method="post" action="" class="login__form">
                <div class="login__input">
                    <label for="usn">Username</label>
                    <input type="text" name="usn" id="usn">
                </div>
                <div class="login__input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>