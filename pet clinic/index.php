<?php
require_once('./includes/meta.php')
?>

<body>
    <div class="login-container">
        <div class="login">
            <div class="login__logo">
                <h1>ペット<span>クリニック</span> </h1>
            </div>
            <form method="post" action="" class="login__form">
                <div class="login__input">
                    <label for="usn">ユーザー名</label>
                    <input type="text" name="usn" id="usn">
                </div>
                <div class="login__input">
                    <label for="psw">パスワード</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <button type="submit">ログイン</button>
            </form>
        </div>
    </div>
</body>

</html>