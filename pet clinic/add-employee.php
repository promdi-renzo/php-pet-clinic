<?php
require_once('./includes/meta.php')
?>

<body>
    <div class="employee-form-container">
        <div class="employee-form">
            <div class="employee-form__logo">
                <h1>Add Employee</h1>
            </div>
            <form method="post" action="" class="employee-form__form">
                <div class="employee-form__input">
                    <label for="usn">Name</label>
                    <input type="text" name="usn" id="usn">
                </div>
                <div class="employee-form__input">
                    <label for="num">Phone Number</label>
                    <input type="text" name="num" id="num">
                </div>
                <div class="employee-form__input">
                    <label for="psw">Password</label>
                    <input type="password" name="psw" id="psw">
                </div>
                <button type="submit">Add Employee</button>
            </form>
        </div>
    </div>
</body>

</html>